<?php 

class InvoiceCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->wait(1);
        $I->resizeWindow(1350, 750);
        $I->wait(2);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->click('div.sf-toolbar.sf-display-none:nth-child(6) div.sf-toolbarreset.clear-fix a.hide-button:nth-child(10) svg:nth-child(1) > path:nth-child(1)');
        $I->wait(1);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click('/html/body/div[1]/div/main/div/div[2]/section/div[1]/div/div/div[2]/form/button[1]/div');
        $I->wait(25);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->click("//button[@class='he-header__navbar-hamburger']");
        $I->wait(1);
        $I->see('Build', "//span[normalize-space()='Build']");
        $I->wait(1);
        $I->click("//span[normalize-space()='Build']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Invoices']");
        $I->wait(5);
        $I->seeElement("//div[@class='he-body-content']//li[6]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[5]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[4]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[3]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[2]//a[1]");
        $I->seeElement("//li[@class='list-inline-item active']//a[@class='nav-link']");
        
        
        //...................Customer' details........................
        $I->click("//button[normalize-space()='New Invoice']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Type customer company name']",'Anystreet');
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-build-com-wrap']/div[@class='he-build-com__details']/div[@class='he-build-com__details-col he-build-com__left-col']/form[@class='form']/div[@class='form-group']/div[@class='he-build-com__gray-bg']/div[@class='form-group row']/div[1]/div[1]/div[1]/div[1]");
        $I->wait(2);
        $I->fillField("#react-select-3-input",'Australia');
        $I->wait(1);
        $I->pressKey("#react-select-3-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//div[@class='he-build-com__details-col he-build-com__left-col']//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Select']");
        $I->wait(2);
        $I->fillField("#react-select-4-input",'Queensland');
        $I->wait(1);
        $I->pressKey("#react-select-4-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->fillField("//textarea[@name='cu_street']",'414-7533 Non Rd.Miami Beach North Dakota');
        $I->fillField("//input[@name='cu_city']",'22 Daniel St, Pittsworth');
        $I->fillField("//input[@name='cu_pcode']",'4356');
        $I->wait(1);
        
        
        //....................Company's Detail..................
        $I->fillField("//input[@placeholder='Type company name']",'OpenDecor');
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-build-com-wrap']/div[@class='he-build-com__details']/div[@class='he-build-com__details-col he-build-com__right-col']/form[@class='form']/div[@class='form-group']/div[@class='he-build-com__gray-bg']/div[@class='form-group row']/div[1]/div[1]/div[1]/div[1]");
        $I->wait(2);
        $I->fillField("#react-select-5-input",'Australia');
        $I->wait(1);
        $I->pressKey("#react-select-5-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-gray-bg']/div[@class='he-build-com-wrap']/div[@class='he-build-com__details']/div[@class='he-build-com__details-col he-build-com__right-col']/form[@class='form']/div[@class='form-group']/div[@class='he-build-com__gray-bg']/div[@class='form-group row']/div[2]/div[1]/div[1]/div[1]/div[1]");
        $I->wait(2);
        $I->fillField("#react-select-6-input",'South Australia');
        $I->wait(1);
        $I->pressKey("#react-select-6-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->fillField("//textarea[@name='co_street']",'P.O. Box 360 4407 Et Rd. Santa Monica FL');
        $I->fillField("//input[@name='co_city']",'Carey Rd, Wilmington');
        $I->fillField("//input[@name='co_pcode']",'5485');
        $I->wait(1);
        
        
        $I->fillField("//input[@placeholder='Type your ABN/ACN']",'53930548027');
        $I->fillField("//input[@placeholder='Type reference number']",'48027');
        $I->wait(1);
        $I->click("//div[@class='row']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, July 15th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='he-build-com__reference']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, August 5th, 2021']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type invoice title']",'This is Quote Title');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type invoice number']",'Q-002');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type project name and address if any.']",'This is Project Name');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type summary']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->click("//span[@class='he-add']");
        $I->wait(2);
        $I->click("//div[contains(text(),'Type or search professional services')]");
        $I->wait(1);
        $I->fillField("#react-select-8-input",'Architect');
        $I->wait(1);
        $I->pressKey("#react-select-8-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//button[normalize-space()='Add']");
        $I->wait(1);
        $I->attachFile('//*[@id="upload-image-button0"]', 'mb.jpg');
        $I->wait(1);
        $I->click("//tbody/tr/td[4]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit']",'piece');
        $I->wait(1);
        $I->click("//tbody/tr/td[5]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr/td[5]/span[1]");
        $I->wait(1);
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Qty']",'15');
        $I->wait(1);
        $I->click("//tbody/tr/td[6]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr/td[6]/span[1]");
        $I->wait(1);
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit Price']",'700');
        $I->wait(1);
        $I->click("//tbody/tr/td[7]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr/td[7]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Disc']",'10');
        $I->wait(1);
        $I->click("//tbody//div//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Remark']",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type terms']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->attachFile('//*[@id="he_file_uploader"]', 'mb.pdf');
        $I->wait(1);
        $I->wait(1);
        $I->click("//button[normalize-space()='Save']");
        $I->wait(5);


        //......Edit Quotes........
        $I->click("//span[@title='More']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Edit']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Type customer company name']","Wovan");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type company name']","ChilliFlex");
        $I->wait(1);
        $I->click("//button[normalize-space()='Save']");
        $I->wait(2);
        
        
        //........Deleting Quotes......
        $I->click("//span[@title='More']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Delete']");
        $I->wait(2);
        $I->waitForText("Deleting this row will erase all your information you've provided. This can not be undone.", 30);
        $I->see("Deleting this row will erase all your information you've provided. This can not be undone.", '//span[contains(text(),"Deleting this row will erase all your information ")]');
        $I->wait(2);
        $I->click("//button[normalize-space()='Delete']");
        $I->wait(5);
        
        

        


        
    }
}

