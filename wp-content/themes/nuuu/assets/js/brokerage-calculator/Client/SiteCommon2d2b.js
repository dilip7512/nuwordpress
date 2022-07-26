var siteCommonJS = {};
siteCommonJS.siteRoot = window.siteRoot || "http://localhost:49633/";

//key for localStorage Used when user is registerd by verify otp
siteCommonJS.REGISTER_OBJ_KEY = 'RegisterObjKey';

siteCommonJS.toJavaScriptDate = function (value) {
    const monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "Octomber", "November", "December"];

    if (value != null && value != "") {
        var pattern = /Date\(([^)]+)\)/;
        //  var results = pattern.exec(value);
        var dt = new Date(value);
        var year = dt.getFullYear();
        var date = dt.getDate();
        if (date < 10) {
            date = "0" + date + "";
        }
        var month = (dt.getMonth() + 1);
        //if (month < 10) {
        //    month = "0" + month + "";
        //}
        month = monthNames[month - 1];

        return month + " " + date + ", " + year;
    }
    return "-"
}

siteCommonJS.encryptQS = function (str) {
    try {
        if (str === null || str === "") {
            return str;
        }
        if (key == null || key.length <= 0) {
            return str
        }
        // if (key.toString().length > 8) key = key.substring(0, 8);
        var prand = "";
        for (var i = 0; i < key.length; i++) {
            prand += key.charCodeAt(i).toString()
        }
        var sPos = Math.floor(prand.length / 5),
            preMult = prand.charAt(sPos) == '0' ? '1' : prand.charAt(sPos);
        preMult = preMult + prand.charAt(sPos * 2) + prand.charAt(sPos * 3) + prand.charAt(sPos * 4) + prand.charAt(sPos * 5);
        var mult = parseInt(preMult),
            incr = Math.ceil(key.length / 2),
            modu = Math.pow(2, 31) - 1;
        if (mult < 2) {
            return null
        }
        var salt = Math.round(Math.random() * 1000000000) % 100000000;
        prand += salt;
        while (prand.length > 10) {
            prand = (parseInt(prand.substring(0, 10), 10)).toString()
        }
        var prand_new = (mult * parseInt(prand) + incr) % modu;
        var enc_chr,
            enc_str = "";
        for (var j = 0; j < str.length; j++) {
            enc_chr = parseInt((str.charCodeAt(j) ^ Math.floor((prand_new / modu) * 255)).toString());
            if (enc_chr < 16) {
                enc_str += "0" + enc_chr.toString(16)
            } else enc_str += enc_chr.toString(16);
            prand_new = (mult * prand_new + incr) % modu
        }
        // var salt_new = salt.toString(16);
        // while(salt_new.length < 8) {
        // salt_new = "0" + salt;
        // }
        enc_str += salt;
        return enc_str
    } catch (error) {
        // console.log(error);
    }
}

siteCommonJS.isValidMobileNo = function (mobileNo) {
    var pattern = new RegExp(/^[6-9][0-9]{9}$/);
    return pattern.test(mobileNo);
}

siteCommonJS.isValidEmailAddress = function (emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}

siteCommonJS.onlyNumbers = function (e) {
    var val = e.key;
    if (isNaN(e.key) && e.key != "Backspace" && e.key != "Tab" && e.key != "Delete"
        && e.key != "ArrowLeft" && e.key != "ArrowRight" && e.key != "ArrowUp" && e.key != "ArrowDown") {
        return false;
    }
    return true;
}

siteCommonJS.isNumeric = function (num) {
    return !isNaN(num)
};

siteCommonJS.createUniqueId = function () {
    var randLetter = String.fromCharCode(65 + Math.floor(Math.random() * 26));
    var uniqId = randLetter + Date.now();
    return uniqId;
}

siteCommonJS.customEncryption = function (content) {
    if (!content) return null;
    var result = [];
    var passLen = key.length;
    for (var i = 0; i < content.length; i++) {
        var passOffset = i % passLen;
        var calAscii = (content.charCodeAt(i) + key.charCodeAt(passOffset));
        result.push(calAscii);
    }
    return JSON.stringify(result);
}

siteCommonJS.customDecryption = function (content) {
    if (!content || content == 'null') return;

    var result = [];
    var str = '';
    var codesArr = JSON.parse(content);
    var passLen = key.length;
    for (var i = 0; i < codesArr.length; i++) {
        var passOffset = i % passLen;
        var calAscii = (codesArr[i] - key.charCodeAt(passOffset));
        result.push(calAscii);
    }
    for (var i = 0; i < result.length; i++) {
        var ch = String.fromCharCode(result[i]); str += ch;
    }
    return str;
}

siteCommonJS.getNameInitials = function (string) {
    if (!string) return;

    var names = string.split(' '),
        initials = names[0].substring(0, 1).toUpperCase();

    if (names.length > 1) {
        initials += names[names.length - 1].substring(0, 1).toUpperCase();
    }
    return initials;
};

// obj={text:'acc',exchange:'NSE'}
siteCommonJS.scriptLookUp = function (obj, cb) {
    siteCommonJS.requestVerificationToken(obj);
    $.ajax({
        url: siteCommonJS.siteRoot + "/PreLogin/ScriptLookUp",
        type: "post",
        data: obj,
        success: cb,
        error: function (e) {
            console.error(e);
        }
    });
}
//obj = {token:'1', exchange:'NSE'}
siteCommonJS.getScriptDetail = function (obj, cb) {
    siteCommonJS.requestVerificationToken(obj);
    $.ajax({
        url: siteCommonJS.siteRoot + "/PreLogin/GetScriptDetail",
        type: "post",
        data: obj,
        success: cb,
        error: function (e) {
            console.error(e);
        }
    });
}

siteCommonJS.validateMonetoryValue = function (field, decimalLimit) {
    var limit = decimalLimit || 2;
    var val = $(field).val();
    var parts = val.split('.');
    if (isNaN(val)) {
        val = val.replace(/[^0-9\.]/g, '');
        var parts = val.split('.');
        if (parts.length >= limit)
            val = val.replace(/\.+$/, "");
    }
    if (parts.length > 1 && parts[1].length > limit) {
        val = parts[0] + '.' + parts[1].substring(0, limit);
    }
    $(field).val(val);
}

siteCommonJS.strQS = function (str) {
    var strtext = str.replace(" ", "-");
    return strtext;
}

siteCommonJS.convertObjToCurrencyFormat = function (obj) {
    var outputObj = obj;
    for (var key in outputObj) {
        if (outputObj.hasOwnProperty(key)) {
            var currencyValue = siteCommonJS.currencyFormat(outputObj[key]);
            outputObj[key] = currencyValue;
        }
    }
}

siteCommonJS.currencyFormat = function (value) {
    var numberValue = Number(value);
    if (numberValue) {
        numberValue = numberValue.toFixed(2);
        numberValue = numberValue;
        numberValue = numberValue.toString();
        var decimalSplit = numberValue.split('.');
        var x = decimalSplit[0];
        var afterDecimal = decimalSplit.length > 1 ? '.' + decimalSplit[1] : '';
        var lastThree = x.substring(x.length - 3);
        var otherNumbers = x.substring(0, x.length - 3);
        if (otherNumbers != '')
            lastThree = ',' + lastThree;
        var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterDecimal;
        return res;
    }
    return value;
}


//This will create a new scriptObj with given scriptDetail
//This will ensure that we dont have to change the field name in other place 
//as we are uncertain about the field name of scriptObj from api.
siteCommonJS.ScriptObj = function (scriptDet) {
    if (scriptDet) {
        this.scriptName = scriptDet.ScripSymbol || scriptDet.ScriptName || scriptDet.CompanyName || scriptDet.Symbol;
        this.scriptSymbol = scriptDet.ScripSymbol || scriptDet.Symbol;
        this.scriptSymbolWithExpiry = scriptDet.SymbolWithExp;
        this.minLotQty = scriptDet.MinLotQty;
        this.scriptCode = scriptDet.ScripCode;

        this.emfPerc = scriptDet.EmfPercentage;
        this.misPerc = scriptDet.MisPercentage;
        this.spanPerc = scriptDet.SpanPerc;
        this.misPlusPerc = scriptDet.misPlusPerc;
        this.riskPaddingPerc = scriptDet.RiskPaddingPercentage;
        this.buyMarginPerc = scriptDet.BuyMarginPercentage || scriptDet.MarginPercentage;

        this.IsMisPlusAllowed = scriptDet.IsMisPlusAllowed;
        this.IsMisAllowed = scriptDet.IsMisAllowed;
        this.IsEmfAllowed = scriptDet.IsEmfAllowed;
        this.strikePrice = scriptDet.StrikePrice;

        var prodType = [];
        if (scriptDet.ExchangeCode == constant.exchangeCode.NF
            || scriptDet.ExchangeCode == constant.exchangeCode.NSE_CURR
            || scriptDet.ExchangeCode == constant.exchangeCode.MX_COMMODITY) {
            prodType.push(constant.productType.CNF)
        } else
            prodType.push(constant.productType.CNC)

        if (this.IsMisAllowed == 'Y')
            prodType.push(constant.productType.MIS);

        if (this.IsMisPlusAllowed == 'Y')
            prodType.push(constant.productType.MIS_PLUS);

        if (this.IsEmfAllowed == 'Y')
            prodType.push(constant.productType.EMF);

        this.productTypes = prodType;

    }
}

siteCommonJS.showLoader = function () {
    $('body').addClass('body-loder');
}

siteCommonJS.hideLoader = function () {
    $('body').removeClass('body-loder');
}

siteCommonJS.getDummyObj = function () {

}

//option type only for span as of 13mar2020
siteCommonJS.scriptAutoComplete = function ($ele, onScriptSelected, exchange, optionType) {

    siteCommonJS.destroyAutoCompleteIfExist($ele);
    $ele.autocomplete({
        source: dataSource,
        minLength: 2,
        autoFocus: true,
        select: onScriptSelected
    });

    function dataSource(request, response) {
        var scriptText = $ele;
        var obj = {
            text: $ele.val(),
            exchange: typeof exchange === "function" ? exchange() : exchange,
            optionType: typeof optionType === "function" ? optionType() : optionType
        }

        siteCommonJS.scriptLookUp(obj, onSuccess);
        function onSuccess(result) {
            if (result.messageCode != 0) {
                return alert(result.message);
            }
            var scriptData = result.data;
            scriptData = scriptData.slice(0, 50);
            if (obj.exchange == 'NC')
                scriptData = sortByKeyword(scriptData, obj.text);

            if (scriptData && scriptData.length == 0) {
                var result = [{
                    label: 'No Result Found',
                    value: '-1'
                }];
                return response(result);
            }

            response($.map(scriptData, function (item) {

                var lebel = '';
                var exchange = obj.exchange;
                if (exchange == constant.exchangeCode.NF || exchange == constant.segment.CURRENCY || exchange == constant.segment.COMMODITY) {
                    label = item.SymbolWithExp;
                }
                else if (exchange == constant.SPAN_CALC)
                    label = item.SymbolWithExp;
                else
                    label = item.ScripSymbol;

                return {
                    label: lebel,
                    value: label,
                    objItem: item
                }
            }));

            function sortByKeyword(d, enterKeyword) {

                var getSortRankfunction = function (unit) {
                    var so_UnitKeywordIndicator = [new RegExp(enterKeyword.toUpperCase())];
                    var len = so_UnitKeywordIndicator.length
                    if (!unit)
                        return len;
                    for (var i = 0; i < so_UnitKeywordIndicator.length; i++) {
                        if (so_UnitKeywordIndicator[i].test(unit.toUpperCase())) {
                            return i;
                        }
                    }
                    return len;
                }

                var sortedUnits = d.sort(function (x, y) {
                    return getSortRankfunction(x.ScripSymbol) - getSortRankfunction(y.ScripSymbol);
                });
                return sortedUnits;


            }
        }
    }
}

siteCommonJS.destroyAutoCompleteIfExist = function ($searchEle) {
    if ($searchEle.data('autocomplete')) {
        $searchEle.autocomplete("destroy");
        $searchEle.removeData('autocomplete');
    }
}


//eleArray = ['#btn1','#btn2']
siteCommonJS.enterBtnEvent = function (eleArray) {
    eleArray.forEach(function (ele) {
        $(ele).on('keydown', function (e) {
            if (e.which == 13) {
                if (!$(ele).is(':visible'))
                    return;

                e.preventDefault();
                $(ele).click();
            }
        });
    });
}

siteCommonJS.enterBtnEventInput = function (eleArray, triggerBtn) {
    eleArray.forEach(function (ele) {
        $(ele).on('keydown', function (e) {
            if (e.which == 13) {
                if (!$(ele).is(':visible'))
                    return;

                e.preventDefault();
                $(triggerBtn).click();
            }
        });
    });
}

siteCommonJS.toVideoJavaScriptDate = function (value) {
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    if (value != null && value != "") {
        var pattern = /Date\(([^)]+)\)/;
        //  var results = pattern.exec(value);
        var dt = new Date(value);
        var year = dt.getFullYear();
        var date = dt.getDate();
        if (date < 10) {
            date = "0" + date + "";
        }
        var month = (dt.getMonth() + 1);
        //if (month < 10) {
        //    month = "0" + month + "";
        //}
        month = monthNames[month - 1];

        return month + " " + date + ", " + year;
    }
    return "-"
}

siteCommonJS.requestVerificationToken = function (data) {
    if (!data)
        data = {};
    data.__RequestVerificationToken = $("input[name=__RequestVerificationToken]").val();
}


siteCommonJS.blockSpecialChar = function (e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    var questionMarkKey = 63, fullStopKey = 46
    if (questionMarkKey == k || fullStopKey == k) return true;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}


siteCommonJS.ajaxSearchFaqVideoSelf = function (searchObj, cb) {
    if (!searchObj)
        return console.error('searchObj is empty');
    if (!searchObj.keyword)
        return console.error('keyword is empty');
    if (!searchObj.type)
        return console.error('type is empty');

    $.ajax({
        url: siteCommonJS.siteRoot + "/PreLogin/SearchVideoFaqSelfHelp",
        type: "Post",
        data: searchObj,
        success: function (resp) {
            cb(resp)
        },
        error: function (e) {
            console.error(e);
        }
    });
}


siteCommonJS.searchFunctionality = function () {
    var $autoSearchEle = $('#commonSearchControl');
    $autoSearchEle.autocomplete({
        source: dataSource,
        minLength: 2,
        autoFocus: true,
        select: function (event, ui) {
            if (ui.item.value == '-1') {
                return event.preventDefault();
            }
            event.preventDefault();
            $autoSearchEle.val(ui.item.label);
            window.location.href = ui.item.redirectUrl;
        },
        focus: function (event, ui) {
            event.preventDefault();
            //$autoSearchEle.val(ui.item.label);
        },
    });

    function dataSource(req, response) {
        var searchObj = {
            keyword: $autoSearchEle.val(),
            type: $autoSearchEle.data('type')                   //set in _FaqVideoSelfHelp Partialview
        }
        siteCommonJS.requestVerificationToken(searchObj);
        siteCommonJS.ajaxSearchFaqVideoSelf(searchObj, onSuccess);

        function onSuccess(resp) {
            if (resp && resp.code == 0) {
                if (resp.data.length == 0) {
                    var result = [{
                        label: 'No Result Found',
                        value: '-1'
                    }];
                    return response(result);
                }
                response($.map(resp.data, function (i) {
                    return {
                        label: i.Title, value: i.Id,
                        categoryid: i.CategoryId,
                        redirectUrl: i.RedirectUrl
                    };
                }));
            }
        }
    }
}

//format MMM dd,yyyy HH:mm am/pm;
siteCommonJS.getDateTime = function (date) {
    if (!(date && typeof date.getMonth === 'function'))
        date = new Date();
    var month = [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ][date.getMonth()];
    var day = (date.getDate() < 10 ? '0' : '') + date.getDate();
    var str = month + " " + day + ", " + date.getFullYear();
    return str;
}


siteCommonJS.showDialog = function (heading, content, okBtnText, isShowCancel, okCallBack) {
    if (!heading)
        heading = 'My Espresso';
    var $msgModel = $('#msg-popup');
    $msgModel.modal('show');

    $msgModel.find('.msgDialogTitle').text(heading);
    $msgModel.find('.diaMessage').text(content);
    $msgModel.find('.diaOkBtn').text(okBtnText);
    if (isShowCancel)
        $msgModel.find('.diaCancelBtn').show();
    else
        $msgModel.find('.diaCancelBtn').hide();

    if (typeof okCallBack === 'function') {
        $msgModel.find('.diaOkBtn').on('click', okCallBack);
    } else {
        $msgModel.find('.diaOkBtn').on('click', function (e) {
            $msgModel.modal('hide');
        });
    }


}

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0' + minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}
$(function () {
    siteCommonJS.searchFunctionality()
})
