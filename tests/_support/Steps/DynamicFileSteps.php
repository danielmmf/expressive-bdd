<?php  //[STAMP] 6c519b358f68bacf72ea61d3176d1d2b
namespace Steps;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait DynamicFileSteps
{

    public $gerado , $user ;
	 /**
     * @Given I have key_api :num1:num2:num3
     */
     public function iHaveKey_api($num1, $num2, $num3)
     {
         $this->user = new \MsgApi\DynamicFile();
         $this->user->criar($num1. $num2. $num3);
     }

    /**
     * @When I call service_worker
     */
     public function iCallService_worker()
     {
         $this->gerado =  $this->user->gerar();
     }

	/**
     * @Then I should see that my service workers is :arg1
     */
     public function iShouldSeeThatMyServiceWorkersIs($arg1)
     {

        if($arg1 == $this->gerado){
          return true;
         }else{
          throw new \Error("Erro ao retornar o Key certo do usuario , retornou :".$this->gerado, 1);
        }
     }

}
    