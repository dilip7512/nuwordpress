var constant = {
    SPAN_CALC: 'SPAN_CALULATOR',
    productType: {
        EMF: 'emf',
        CNC: 'cnc',
        MIS: 'mis',
        MIS_PLUS: 'misPlus',
        CNF: 'cnf'
    },
    BUY: 'buy',
    SELL: 'sell',
    segment: {
        EQ: 'CASH',
        BC: 'BC',
        NC: 'NC',
        CURRENCY: 'NSE_CURR',
        COMMODITY: 'MX_COMMODITY',
        FNO: 'NF'
    },
    transactionType: {
        BUY: 'buy',
        SELL: 'sell'
    },
    exchanges: {
        NSE: 'nse',
        BSE: 'bse'
    },
    exchangeCode: {
        CASH: 'CASH',
        NC: 'NC',       //nse, same 'NC' is required for search purpose, dont change the name;
        BC: 'BC',       //bse,
        NF: 'NF',        //nse FNO
        NSE_CURR: 'NSE_CURR',
        MX_COMMODITY: 'MX_COMMODITY'
    },
    tradingNContractType: {
        DELIVERY: 'Delivery',
        INTRADAY: 'Intraday',
        EMF: 'Emf',

        FUTURE: 'Future',
        OPTIONS: 'Options',

        FUTURE_INTRADAY: 'Future_Intraday',
        OPTION_INTRADAY: 'Option_Intraday',
    },
    calculatorType: {
        BROKERAGE: 'brokerage',
        MARGIN: 'margin',
        OPTIONS: 'options',
        SPAN: 'span'
    },
    validationMsg: {
        brokerageCalcValidation: {
            BUY_ERROR: 'Enter buy price entered.',
            SELL_ERROR: 'Enter sell price entered.',
            QTY_ERROR: 'Enter Qty entered.'
        },
        marginCalcValidation: {
           // PRICE_ERROR: 'Invalid price entered.',
            PRICE_ERROR: ' Enter price to proceed',
          ///  QTY_ERROR: 'Invalid Qty entered.',
            QTY_ERROR: 'Enter quantity to proceed',
            SCRIPT_ERROR: 'Please select scrip',
            BUY_SL_ERROR: 'SL price should be lower than price',
            SELL_SL_ERROR: 'SL price should be higher than price'
        },
        ERROR_MSG: 'Some error occured. Please try after some time'
    },
    positionType: {
        NEW: 'New Position',
        SQ_OFF: 'Square Off',
        SQ_OFF_NEW: 'Square Off + New'
    }
};


constant.taxNCharges = { 
    equity: {
        delivery: {
            brokerage: 0,
            brokerageFlat: 20,
            stt: 0.1,
            transactionCharge: 0.00325,
            transactionChargesBSE: 0.00275,
            gst: 18,                                  //brokerage+tr charges
            //sebi: 5/10000000,                             //per crore turnover
			sebi: 10 / 10000000,
            stampDuty: 0.015 
        },
        emf:{
            brokerage: 2.5,
            brokerageFlat: 20,
            stt: 0.1,
            transactionCharge: 0.00325,
            transactionChargesBSE: 0.00275,
            gst: 18,                                  //brokerage+tr charges
            //sebi: 5/10000000,                             //per crore turnover
			sebi: 10 / 10000000,
            stampDuty: 0.015 
        },
        intraday: {
            brokerage: 0.03,
            brokerageFlat: 20,
            sttOnSell: 0.025,
            transactionCharge: 0.00325,
            transactionChargesBSE: 0.00275,
            gst: 18,                                 //brokerage+tr charges
            //sebi: 5 / 10000000,                           //per crore turnover
			sebi: 10 / 10000000,
            stampDuty: 0.003
        },
        futures: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell: 0.01,
            transactionCharge: 0.0019,
            gst: 18,                               //brokerage+tr charges
            //sebi: 5/10000000,                           //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.002
        },
        options: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0.05,              //On Premium 
            transactionCharge: 0.05,
            gst: 18,                        //brokerage+tr charges
            //sebi: 5 / 10000000,                    //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.003
        },
        futuresIntraday: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell: 0.01,
            transactionCharge: 0.0019,
            gst: 18,                               //brokerage+tr charges
            //sebi: 5 / 10000000,                           //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.002
        },
        optionsIntraday: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0.05,              //On Premium 
            transactionCharge: 0.05,
            gst: 18,                        //brokerage+tr charges
            //sebi: 5 / 10000000,                    //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.003
        }
    },
    currency: {
        futures: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell:0,
            transactionCharge: 0.00095,
            gst: 18,                               //brokerage+tr charges
            sebi: 10 / 10000000,                  //per crore
			//sebi: 0.0001,
            stampDuty: 0.0001
        },
        options: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0,              //On Premium 
            transactionCharge: 0.00095,
            gst: 18,                                   //brokerage+tr charges
            //sebi: 0.0001,                      //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.0001
        },
        futuresIntraday: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell: 0.01,
            transactionCharge: 0.00095,
            gst: 18,                               //brokerage+tr charges
            //sebi: 0.00005/100,                           //per crore
			sebi: 10 / 10000000,                        //Edited by Puja
            stampDuty: 0.002
        },
        optionsIntraday: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0.05,              //On Premium 
            transactionCharge: 0.037,
            gst: 18,                        //brokerage+tr charges
            //sebi: 0.00005/100,                    //per crore
			sebi: 10 / 10000000,                        //Edited by puja
            stampDuty: 0.003
        }
    },
    commodity: {
        futures: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell: 0.01,        
            transactionCharge: 0.000001,
            gst: 18,                               //brokerage+tr charges
            //sebi: 0.0001,                       //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.002
        },
        options: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0.05,                //On Premium 
            transactionCharge: 0.00095,
            gst: 18,                        //brokerage+tr charges
            //sebi: 0.0001,
			sebi: 10 / 10000000,
            stampDuty: 0.003
        },
        futuresIntraday: {
            brokerageFlat: 20,
            brokerage: 0.03,
            sttOnSell: 0.01,
            transactionCharge: 0.0026,
            gst: 18,                               //brokerage+tr charges
            //sebi: 0.00005/100,                           //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.002
        },
        optionsIntraday: {
            brokerageFlat: 20,
            brokerage: 0.01,
            sttOnSell: 0.05,              //On Premium 
            transactionCharge: 0.0026,
            gst: 18,                        //brokerage+tr charges
            //sebi: 0.00005 / 100,                    //per crore
			sebi: 10 / 10000000,
            stampDuty: 0.003
        }
    }
}