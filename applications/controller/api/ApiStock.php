<?php
/**
 * 股票相关的API接口
 */
class ApiStockController extends WebController {

    //获取深股行情
    public function szall() {
        $url = 'http://webstock.quote.hermes.hexun.com/a/sortlist?block=2&commodityid=0&title=15&direction=0&start=0&number=50&&time=153710&column=code,name,price,updownrate,LastClose,open,high,low,volume,priceweight,amount,exchangeratio,VibrationRatio,VolumeRatio';
        $cont = file_get_contents($url);
        $this->http->output($cont);
    }
}
?>