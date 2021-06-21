<?php 

class requestquoteCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->wait(1);
        $I->resizeWindow(1365, 750);
        $I->wait(3);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->click('div.sf-toolbar.sf-display-none:nth-child(6) div.sf-toolbarreset.clear-fix a.hide-button:nth-child(10) svg:nth-child(1) > path:nth-child(1)');
        $I->wait(1);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click('/html/body/div[1]/div/main/div/div[2]/section/div[1]/div/div/div[2]/form/button[1]/div');
        $I->wait(30);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->click("//button[@class='he-header__navbar-hamburger']");
        $I->wait(1);
        $I->see('Build', "//span[normalize-space()='Build']");
        $I->wait(1);
        $I->click("//span[normalize-space()='Build']");
        $I->wait(1);
        $I->see('Quotes', "//a[normalize-space()='Quotes']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Quotes']");
        $I->wait(3);
        $I->seeElement("//div[@class='he-body-content']//li[2]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[3]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[4]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[5]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[6]//a[1]");
        $I->see('Create a Quote', "//button[normalize-space()='Create a Quote']");
        $I->see('Request a Quote', "//button[normalize-space()='Request a Quote']");
        $I->wait(1);


         //.............On REQUEST A QUOTE.................
         $I->click("//button[normalize-space()='Request a Quote']");
         $I->wait(1);
         $I->see('Request a Quote', "//h2[normalize-space()='Request a Quote']");
         $I->wait(1);
         
         //.................Filling Form..................
         $I->click("//div[contains(text(),'Select project type')]");
         $I->wait(2);
         $I->fillField("#react-select-3-input",'New Build');
         $I->wait(1);
         $I->pressKey("#react-select-3-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->click("//input[@placeholder='Type or search professional services']");
         $I->wait(2);
         $I->click("//li[@id='rdts1-0_li']//i[@role='button']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-0-0']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-0-2']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-0-4']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-0-5']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-0-6']");
         $I->wait(1);
         $I->checkOption("//input[@id='rdts1-1']");
         $I->wait(1);
         $I->fillField("//input[@placeholder='Postcode']","4700");
         $I->wait(1);
         $I->click("//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Select']");
         $I->wait(2);
         $I->fillField("#react-select-10-input",'Wandal');
         $I->wait(1);
         $I->pressKey("#react-select-10-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-request-quote-wrap']/div[@class='he-request-quote__col']/form[@class='form']/div[@class='form-group row']/div[2]/div[1]/div[1]/div[1]/div[1]");
         $I->wait(2);
         $I->fillField("#react-select-4-input",'Other');
         $I->wait(1);
         $I->pressKey("#react-select-4-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->click("//img[@alt='Calendar']");
         $I->wait(1);
         $I->click("//button[normalize-space()='Next Month']");
         $I->wait(1);
         $I->click("//button[normalize-space()='Next Month']");
         $I->wait(1);
         $I->click("//button[normalize-space()='Next Month']");
         $I->wait(1);
         $I->click("//div[@aria-label='Choose Thursday, August 5th, 2021']");
         $I->wait(1);
         $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-request-quote-wrap']/div[@class='he-request-quote__col']/form[@class='form']/div[5]/div[1]/div[1]/div[1]/div[1]/div[1]");
         $I->wait(2);
         $I->fillField("#react-select-5-input",'General Work');
         $I->wait(1);
         $I->pressKey("#react-select-5-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-request-quote-wrap']/div[@class='he-request-quote__col']/form[@class='form']/div[6]/div[1]/div[1]/div[1]/div[1]/div[1]");
         $I->wait(2);
         $I->fillField("#react-select-6-input",'Not Required');
         $I->wait(1);
         $I->pressKey("#react-select-6-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-request-quote-wrap']/div[@class='he-request-quote__col']/form[@class='form']/div[7]/div[1]/div[1]/div[1]/div[1]/div[1]");
         $I->wait(2);
         $I->fillField("#react-select-7-input",'yes');
         $I->wait(1);
         $I->pressKey("#react-select-7-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->attachFile('//*[@id="he_file_uploader2"]', 'mb.pdf');
         $I->wait(1);
         $I->attachFile('//*[@id="he_file_uploader2"]', 'mb.jpg');
         $I->wait(1);
         $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-request-quote-wrap']/div[@class='he-request-quote__col']/form[@class='form']/div[8]/div[1]/div[1]/div[1]/div[1]/div[1]");
         $I->wait(2);
         $I->fillField("#react-select-8-input",'$500 - $2,000');
         $I->wait(1);
         $I->pressKey("#react-select-8-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(2);
         $I->fillField("#react-select-9-input",'Ready to start');
         $I->wait(1);
         $I->pressKey("#react-select-9-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
         $I->wait(1);
         $I->fillField("//textarea[@name='other_details']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
         $I->wait(1);
         $I->click("//button[normalize-space()='Send']");
         $I->wait(5);






    }
}
