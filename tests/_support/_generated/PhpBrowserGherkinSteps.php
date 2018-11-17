<?php  //[STAMP] 8eef821030fe438e419b7f21e868f2f0
namespace _generated;

// This class was automatically generated by the steppify task
// You should not change it manually as it will be overwritten on next steppify run
// @codingStandardsIgnoreFile

trait PhpBrowserGherkinSteps
{
    
        /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I set header :name and value :value
	 * @When I set header :name and value :value
	 * @Then I set header :name and value :value
     *
     * @see \Codeception\Module\PhpBrowser::setHeader()
     */
    public function step_setHeader($name, $value) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setHeader', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I am http authenticated :username and password :password
	 * @When I am http authenticated :username and password :password
	 * @Then I am http authenticated :username and password :password
     *
     * @see \Codeception\Module\PhpBrowser::amHttpAuthenticated()
     */
    public function step_amHttpAuthenticated($username, $password) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('amHttpAuthenticated', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I am on url :url
	 * @When I am on url :url
	 * @Then I am on url :url
     *
     * @see \Codeception\Module\PhpBrowser::amOnUrl()
     */
    public function step_amOnUrl($url) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('amOnUrl', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I am on subdomain :subdomain
	 * @When I am on subdomain :subdomain
	 * @Then I am on subdomain :subdomain
     *
     * @see \Codeception\Module\PhpBrowser::amOnSubdomain()
     */
    public function step_amOnSubdomain($subdomain) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('amOnSubdomain', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I execute in guzzle :function
	 * @When I execute in guzzle :function
	 * @Then I execute in guzzle :function
     *
     * @see \Codeception\Module\PhpBrowser::executeInGuzzle()
     */
    public function step_executeInGuzzle(Closure $function) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('executeInGuzzle', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I have http header :name and value :value
	 * @When I have http header :name and value :value
	 * @Then I have http header :name and value :value
     *
     * @see \Codeception\Module\PhpBrowser::haveHttpHeader()
     */
    public function step_haveHttpHeader($name, $value) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('haveHttpHeader', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I delete header :name
	 * @When I delete header :name
	 * @Then I delete header :name
     *
     * @see \Codeception\Module\PhpBrowser::deleteHeader()
     */
    public function step_deleteHeader($name) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('deleteHeader', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I am on page :page
	 * @When I am on page :page
	 * @Then I am on page :page
     *
     * @see \Codeception\Module\PhpBrowser::amOnPage()
     */
    public function step_amOnPage($page) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('amOnPage', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I click :link
	 * @Given I click :link and context :context
	 * @When I click :link
	 * @When I click :link and context :context
	 * @Then I click :link
	 * @Then I click :link and context :context
     *
     * @see \Codeception\Module\PhpBrowser::click()
     */
    public function step_click($link,  $context = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('click', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see text :text
	 * @Given I see text :text and selector :selector
	 * @When I see text :text
	 * @When I see text :text and selector :selector
	 * @Then I see text :text
	 * @Then I see text :text and selector :selector
     *
     * @see \Codeception\Module\PhpBrowser::see()
     */
    public function step_see($text,  $selector = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('see', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see text :text
	 * @Given I dont see text :text and selector :selector
	 * @When I dont see text :text
	 * @When I dont see text :text and selector :selector
	 * @Then I dont see text :text
	 * @Then I dont see text :text and selector :selector
     *
     * @see \Codeception\Module\PhpBrowser::dontSee()
     */
    public function step_dontSee($text,  $selector = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSee', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see in source :raw
	 * @When I see in source :raw
	 * @Then I see in source :raw
     *
     * @see \Codeception\Module\PhpBrowser::seeInSource()
     */
    public function step_seeInSource($raw) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeInSource', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see in source :raw
	 * @When I dont see in source :raw
	 * @Then I dont see in source :raw
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeInSource()
     */
    public function step_dontSeeInSource($raw) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInSource', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see link :text
	 * @Given I see link :text and url :url
	 * @When I see link :text
	 * @When I see link :text and url :url
	 * @Then I see link :text
	 * @Then I see link :text and url :url
     *
     * @see \Codeception\Module\PhpBrowser::seeLink()
     */
    public function step_seeLink($text,  $url = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeLink', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see link :text
	 * @Given I dont see link :text and url :url
	 * @When I dont see link :text
	 * @When I dont see link :text and url :url
	 * @Then I dont see link :text
	 * @Then I dont see link :text and url :url
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeLink()
     */
    public function step_dontSeeLink($text,  $url = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeLink', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see in current url :uri
	 * @When I see in current url :uri
	 * @Then I see in current url :uri
     *
     * @see \Codeception\Module\PhpBrowser::seeInCurrentUrl()
     */
    public function step_seeInCurrentUrl($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeInCurrentUrl', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see in current url :uri
	 * @When I dont see in current url :uri
	 * @Then I dont see in current url :uri
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeInCurrentUrl()
     */
    public function step_dontSeeInCurrentUrl($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInCurrentUrl', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see current url equals :uri
	 * @When I see current url equals :uri
	 * @Then I see current url equals :uri
     *
     * @see \Codeception\Module\PhpBrowser::seeCurrentUrlEquals()
     */
    public function step_seeCurrentUrlEquals($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeCurrentUrlEquals', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see current url equals :uri
	 * @When I dont see current url equals :uri
	 * @Then I dont see current url equals :uri
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeCurrentUrlEquals()
     */
    public function step_dontSeeCurrentUrlEquals($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeCurrentUrlEquals', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see current url matches :uri
	 * @When I see current url matches :uri
	 * @Then I see current url matches :uri
     *
     * @see \Codeception\Module\PhpBrowser::seeCurrentUrlMatches()
     */
    public function step_seeCurrentUrlMatches($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeCurrentUrlMatches', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see current url matches :uri
	 * @When I dont see current url matches :uri
	 * @Then I dont see current url matches :uri
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeCurrentUrlMatches()
     */
    public function step_dontSeeCurrentUrlMatches($uri) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeCurrentUrlMatches', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I grab from current url
	 * @Given I grab from current url uri :uri
	 * @When I grab from current url
	 * @When I grab from current url uri :uri
	 * @Then I grab from current url
	 * @Then I grab from current url uri :uri
     *
     * @see \Codeception\Module\PhpBrowser::grabFromCurrentUrl()
     */
    public function step_grabFromCurrentUrl( $uri = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabFromCurrentUrl', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I is checked see checkbox :checkbox
	 * @When I is checked see checkbox :checkbox
	 * @Then I is checked see checkbox :checkbox
     *
     * @see \Codeception\Module\PhpBrowser::seeCheckboxIsChecked()
     */
    public function step_seeCheckboxIsChecked($checkbox) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeCheckboxIsChecked', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont is checked see checkbox :checkbox
	 * @When I dont is checked see checkbox :checkbox
	 * @Then I dont is checked see checkbox :checkbox
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeCheckboxIsChecked()
     */
    public function step_dontSeeCheckboxIsChecked($checkbox) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeCheckboxIsChecked', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see in field :field and value :value
	 * @When I see in field :field and value :value
	 * @Then I see in field :field and value :value
     *
     * @see \Codeception\Module\PhpBrowser::seeInField()
     */
    public function step_seeInField($field, $value) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeInField', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see in field :field and value :value
	 * @When I dont see in field :field and value :value
	 * @Then I dont see in field :field and value :value
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeInField()
     */
    public function step_dontSeeInField($field, $value) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInField', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see in form fields :formSelector
	 * @When I see in form fields :formSelector
	 * @Then I see in form fields :formSelector
     *
     * @see \Codeception\Module\PhpBrowser::seeInFormFields()
     */
    public function step_seeInFormFields($formSelector, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('seeInFormFields', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeInFormFields', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see in form fields :formSelector
	 * @When I dont see in form fields :formSelector
	 * @Then I dont see in form fields :formSelector
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeInFormFields()
     */
    public function step_dontSeeInFormFields($formSelector, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInFormFields', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInFormFields', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I submit form :selector
	 * @Given I submit form :selector and button :button
	 * @When I submit form :selector
	 * @When I submit form :selector and button :button
	 * @Then I submit form :selector
	 * @Then I submit form :selector and button :button
     *
     * @see \Codeception\Module\PhpBrowser::submitForm()
     */
    public function step_submitForm($selector, \Behat\Gherkin\Node\TableNode $params,  $button = null) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('submitForm', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('submitForm', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  :field and value :value
	 * @When I  :field and value :value
	 * @Then I  :field and value :value
     *
     * @see \Codeception\Module\PhpBrowser::fillField()
     */
    public function step_fillField($field, $value) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('fillField', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  :select and option :option
	 * @When I  :select and option :option
	 * @Then I  :select and option :option
     *
     * @see \Codeception\Module\PhpBrowser::selectOption()
     */
    public function step_selectOption($select, $option) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('selectOption', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  :option
	 * @When I  :option
	 * @Then I  :option
     *
     * @see \Codeception\Module\PhpBrowser::checkOption()
     */
    public function step_checkOption($option) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('checkOption', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  :option
	 * @When I  :option
	 * @Then I  :option
     *
     * @see \Codeception\Module\PhpBrowser::uncheckOption()
     */
    public function step_uncheckOption($option) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('uncheckOption', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I attach file :field and filename :filename
	 * @When I attach file :field and filename :filename
	 * @Then I attach file :field and filename :filename
     *
     * @see \Codeception\Module\PhpBrowser::attachFile()
     */
    public function step_attachFile($field, $filename) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('attachFile', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I send ajax get request :uri
	 * @Given I send ajax get request :uri and params :params
	 * @When I send ajax get request :uri
	 * @When I send ajax get request :uri and params :params
	 * @Then I send ajax get request :uri
	 * @Then I send ajax get request :uri and params :params
     *
     * @see \Codeception\Module\PhpBrowser::sendAjaxGetRequest()
     */
    public function step_sendAjaxGetRequest($uri, $params) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('sendAjaxGetRequest', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I send ajax post request :uri
	 * @Given I send ajax post request :uri and params :params
	 * @When I send ajax post request :uri
	 * @When I send ajax post request :uri and params :params
	 * @Then I send ajax post request :uri
	 * @Then I send ajax post request :uri and params :params
     *
     * @see \Codeception\Module\PhpBrowser::sendAjaxPostRequest()
     */
    public function step_sendAjaxPostRequest($uri, $params) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('sendAjaxPostRequest', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I send ajax request :method and uri :uri
	 * @Given I send ajax request :method and uri :uri and params :params
	 * @When I send ajax request :method and uri :uri
	 * @When I send ajax request :method and uri :uri and params :params
	 * @Then I send ajax request :method and uri :uri
	 * @Then I send ajax request :method and uri :uri and params :params
     *
     * @see \Codeception\Module\PhpBrowser::sendAjaxRequest()
     */
    public function step_sendAjaxRequest($method, $uri, $params) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('sendAjaxRequest', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I grab text from :cssOrXPathOrRegex
	 * @When I grab text from :cssOrXPathOrRegex
	 * @Then I grab text from :cssOrXPathOrRegex
     *
     * @see \Codeception\Module\PhpBrowser::grabTextFrom()
     */
    public function step_grabTextFrom($cssOrXPathOrRegex) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabTextFrom', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I from :cssOrXpath and attribute :attribute
	 * @When I from :cssOrXpath and attribute :attribute
	 * @Then I from :cssOrXpath and attribute :attribute
     *
     * @see \Codeception\Module\PhpBrowser::grabAttributeFrom()
     */
    public function step_grabAttributeFrom($cssOrXpath, $attribute) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabAttributeFrom', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I grab multiple :cssOrXpath
	 * @Given I grab multiple :cssOrXpath and attribute :attribute
	 * @When I grab multiple :cssOrXpath
	 * @When I grab multiple :cssOrXpath and attribute :attribute
	 * @Then I grab multiple :cssOrXpath
	 * @Then I grab multiple :cssOrXpath and attribute :attribute
     *
     * @see \Codeception\Module\PhpBrowser::grabMultiple()
     */
    public function step_grabMultiple($cssOrXpath,  $attribute = null) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabMultiple', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I grab value from :field
	 * @When I grab value from :field
	 * @Then I grab value from :field
     *
     * @see \Codeception\Module\PhpBrowser::grabValueFrom()
     */
    public function step_grabValueFrom($field) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabValueFrom', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I set cookie :name and val :val
	 * @When I set cookie :name and val :val
	 * @Then I set cookie :name and val :val
     *
     * @see \Codeception\Module\PhpBrowser::setCookie()
     */
    public function step_setCookie($name, $val, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('setCookie', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setCookie', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  :cookie
	 * @When I  :cookie
	 * @Then I  :cookie
     *
     * @see \Codeception\Module\PhpBrowser::grabCookie()
     */
    public function step_grabCookie($cookie, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('grabCookie', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabCookie', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I grab page source
	 * @When I grab page source
	 * @Then I grab page source
     *
     * @see \Codeception\Module\PhpBrowser::grabPageSource()
     */
    public function step_grabPageSource() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('grabPageSource', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I  see cookie :cookie
	 * @When I  see cookie :cookie
	 * @Then I  see cookie :cookie
     *
     * @see \Codeception\Module\PhpBrowser::seeCookie()
     */
    public function step_seeCookie($cookie, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('seeCookie', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeCookie', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see cookie :cookie
	 * @When I dont see cookie :cookie
	 * @Then I dont see cookie :cookie
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeCookie()
     */
    public function step_dontSeeCookie($cookie, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeCookie', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeCookie', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I reset cookie :name
	 * @When I reset cookie :name
	 * @Then I reset cookie :name
     *
     * @see \Codeception\Module\PhpBrowser::resetCookie()
     */
    public function step_resetCookie($name, \Behat\Gherkin\Node\TableNode $params) {
                $args = steppify_convertTableNodesToArrays(func_get_args(), $iterations);
        
        if(!empty($iterations)) {
            $returnValues = [];
            foreach($iterations as $iteration){
                $returnValues[] = $this->getScenario()->runStep(new \Codeception\Step\Action('resetCookie', $iteration));
            }
            
            return $returnValues;
        }
        
        return $this->getScenario()->runStep(new \Codeception\Step\Action('resetCookie', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see element :selector
	 * @Given I see element :selector and attributes :attributes
	 * @When I see element :selector
	 * @When I see element :selector and attributes :attributes
	 * @Then I see element :selector
	 * @Then I see element :selector and attributes :attributes
     *
     * @see \Codeception\Module\PhpBrowser::seeElement()
     */
    public function step_seeElement($selector, $attributes) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeElement', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see element :selector
	 * @Given I dont see element :selector and attributes :attributes
	 * @When I dont see element :selector
	 * @When I dont see element :selector and attributes :attributes
	 * @Then I dont see element :selector
	 * @Then I dont see element :selector and attributes :attributes
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeElement()
     */
    public function step_dontSeeElement($selector, $attributes) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeElement', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see number of elements :selector and expected :expected
	 * @When I see number of elements :selector and expected :expected
	 * @Then I see number of elements :selector and expected :expected
     *
     * @see \Codeception\Module\PhpBrowser::seeNumberOfElements()
     */
    public function step_seeNumberOfElements($selector, $expected) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeNumberOfElements', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see option is selected :selector and optionText :optionText
	 * @When I see option is selected :selector and optionText :optionText
	 * @Then I see option is selected :selector and optionText :optionText
     *
     * @see \Codeception\Module\PhpBrowser::seeOptionIsSelected()
     */
    public function step_seeOptionIsSelected($selector, $optionText) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeOptionIsSelected', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see option is selected :selector and optionText :optionText
	 * @When I dont see option is selected :selector and optionText :optionText
	 * @Then I dont see option is selected :selector and optionText :optionText
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeOptionIsSelected()
     */
    public function step_dontSeeOptionIsSelected($selector, $optionText) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeOptionIsSelected', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see page not found
	 * @When I see page not found
	 * @Then I see page not found
     *
     * @see \Codeception\Module\PhpBrowser::seePageNotFound()
     */
    public function step_seePageNotFound() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seePageNotFound', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see is :code
	 * @When I see is :code
	 * @Then I see is :code
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIs()
     */
    public function step_seeResponseCodeIs($code) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIs', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see response code is between :from and to :to
	 * @When I see response code is between :from and to :to
	 * @Then I see response code is between :from and to :to
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIsBetween()
     */
    public function step_seeResponseCodeIsBetween($from, $to) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIsBetween', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see is :code
	 * @When I dont see is :code
	 * @Then I dont see is :code
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeResponseCodeIs()
     */
    public function step_dontSeeResponseCodeIs($code) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeResponseCodeIs', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see response code is successful
	 * @When I see response code is successful
	 * @Then I see response code is successful
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIsSuccessful()
     */
    public function step_seeResponseCodeIsSuccessful() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIsSuccessful', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see response code is redirection
	 * @When I see response code is redirection
	 * @Then I see response code is redirection
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIsRedirection()
     */
    public function step_seeResponseCodeIsRedirection() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIsRedirection', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see response code is client error
	 * @When I see response code is client error
	 * @Then I see response code is client error
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIsClientError()
     */
    public function step_seeResponseCodeIsClientError() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIsClientError', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see response code is server error
	 * @When I see response code is server error
	 * @Then I see response code is server error
     *
     * @see \Codeception\Module\PhpBrowser::seeResponseCodeIsServerError()
     */
    public function step_seeResponseCodeIsServerError() {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeResponseCodeIsServerError', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I see in title :title
	 * @When I see in title :title
	 * @Then I see in title :title
     *
     * @see \Codeception\Module\PhpBrowser::seeInTitle()
     */
    public function step_seeInTitle($title) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('seeInTitle', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I dont see in title :title
	 * @When I dont see in title :title
	 * @Then I dont see in title :title
     *
     * @see \Codeception\Module\PhpBrowser::dontSeeInTitle()
     */
    public function step_dontSeeInTitle($title) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('dontSeeInTitle', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I switch to iframe :name
	 * @When I switch to iframe :name
	 * @Then I switch to iframe :name
     *
     * @see \Codeception\Module\PhpBrowser::switchToIframe()
     */
    public function step_switchToIframe($name) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('switchToIframe', $args));
    }

    /**
     * [!] Method is generated from steppify task. Documentation taken from corresponding module.
     *
     * @Given I move back
	 * @Given I move back numberOfSteps :numberOfSteps
	 * @When I move back
	 * @When I move back numberOfSteps :numberOfSteps
	 * @Then I move back
	 * @Then I move back numberOfSteps :numberOfSteps
     *
     * @see \Codeception\Module\PhpBrowser::moveBack()
     */
    public function step_moveBack( $numberOfSteps = 1) {
        $args = func_get_args();
        return $this->getScenario()->runStep(new \Codeception\Step\Action('moveBack', $args));
    }
}
