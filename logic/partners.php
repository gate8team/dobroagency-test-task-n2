<?php
    class PartnerKeeper{
        private $partners;

        public function __construct($partners = array()){
            $this->partners = $partners;
        }

        public function generatePartners($count){
            $this->partners = array();

            $i = 0;

            while ($i++ < $count){

                // Dobro code starts here
                $this->partners[] = (object) array(
                    'id' => $i,
                    'logo' => sprintf('/media/images/partners/%1$s/%1$s_small.jpg', $i),
                    'name' => sprintf('Company %s', $i),
                    'description' => sprintf('Description of company %s', $i),
                    'isImportant' => rand(0, 1) ? true : false,
                    'isPartner' => rand(0, 1) ? true : false,
                );
                // Dobro code ends here

            }

            shuffle($this->partners);
        }

        public function getPartners(){
            return $this->partners;
        }

        // TODO
        private function setPartners($partners){

        }
    }
?>