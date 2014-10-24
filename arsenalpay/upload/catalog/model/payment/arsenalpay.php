<?php 
class ModelPaymentArsenalpay extends Model {
    public function getMethod($address, $total) {
        $this->load->language('payment/arsenalpay');

        $method_data = array(
            'code'       => 'arsenalpay',
            'title'      => $this->language->get('text_title'),
            'sort_order' => $this->config->get('arsenalpay_sort_order')
        );

        return $method_data;
    }
        
    public function log($message) {
        if ($this->config->get('pp_payflow_iframe_debug')) {
                $log = new Log('payflow-iframe.log');
                $log->write($message);
        }
    }
}
?>

