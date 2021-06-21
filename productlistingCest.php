<?php 

class productlistingCest
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
        $I->wait(1);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->click('div.sf-toolbar.sf-display-none:nth-child(6) div.sf-toolbarreset.clear-fix a.hide-button:nth-child(10) svg:nth-child(1) > path:nth-child(1)');
        $I->wait(1);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click('/html/body/div[1]/div/main/div/div[2]/section/div[1]/div/div/div[2]/form/button[1]/div');
        $I->wait(20);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->click("//span[@class='he-profile__no-img-36']");
        $I->wait(1);
        $I->click("//div[@class='dropdown-menu show']//h4[contains(text(),'My Profile')]");
        $I->wait(1);
        $I->see('Sukirti Belaura', "//h1[@class='he-banner__profile-name']");
        $I->wait(1);
        $I->see('Contact Info', "//a[normalize-space()='Contact Info']");
        $I->wait(1);
        $I->see('Password', "//a[normalize-space()='Password']");
        $I->wait(1);
        $I->see('Company Profile', "//h4[normalize-space()='Company Profile']");
        $I->wait(1);
        $I->see('Products', "//h4[normalize-space()='Products']");
        $I->wait(1);
        $I->see('Logout', "//div[@class='he-user-dashboard__sidebar']//h4[contains(text(),'Logout')]");
        $I->wait(1);
        $I->wait(1);
        $I->click("//h4[normalize-space()='Products']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Create Product']");
        $I->wait(2);
        $I->see('Create a New Product', "//h2[normalize-space()='Create a New Product']");
        $I->wait(1);
        $I->fillField("//input[@name='name']",'Velvet Chair');
        $I->wait(1);
        $I->click("//div[contains(text(),'Choose category')]");
        $I->wait(2);
        $I->fillField('//*[@id="react-select-8-input"]','Furniture');
        $I->wait(1);
        $I->pressKey('//*[@id="react-select-8-input"]', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->click("//div[contains(text(),'Choose subcategory')]");
        $I->wait(2);
        $I->fillField('//*[@id="react-select-11-input"]','Living Room Furniture');
        $I->wait(1);
        $I->pressKey('//*[@id="react-select-11-input"]', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->click("//div[contains(text(),'Choose sub subcategory')]");
        $I->wait(2);
        $I->fillField("//input[@id='react-select-12-input']",'Sofas');
        $I->wait(1);
        $I->pressKey("//input[@id='react-select-12-input']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//textarea[@name='description']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->fillField("//input[@name='sku']","AD-02-155006");
        $I->wait(1);
        $I->fillField("//input[@id='hashtags']","Soft&Shiny");
        $I->wait(1);
        $I->pressKey("//input[@id='hashtags']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='hashtags']","Comfortable&Mordern");
        $I->wait(1);
        $I->pressKey("//input[@id='hashtags']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='hashtags']","MustBuy");
        $I->wait(1);
        $I->pressKey("//input[@id='hashtags']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->click("//span[normalize-space()='NSW']");
        $I->wait(2);
        $I->click("//span[normalize-space()='VIC']");
        $I->wait(2);
        $I->click("//span[normalize-space()='NT']");
        $I->wait(2);
        $I->click("//div[contains(text(),'Select Style')]");
        $I->wait(2);
        $I->fillField("//input[@id='react-select-9-input']",'Eclectic');
        $I->wait(1);
        $I->pressKey("//input[@id='react-select-9-input']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->click("//div[contains(text(),'Select condition')]");
        $I->wait(2);
        $I->fillField('//*[@id="react-select-10-input"]','New');
        $I->wait(2);
        $I->pressKey('//*[@id="react-select-10-input"]', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@name='brand']",'Sovelt');
        $I->wait(1);
        $I->fillField("//input[@id='models']","A-001");
        $I->wait(1);
        $I->pressKey("//input[@id='models']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='models']","A-002");
        $I->wait(1);
        $I->pressKey("//input[@id='models']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='models']","A-003");
        $I->wait(1);
        $I->pressKey("//input[@id='models']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='colours']","Trunk Brown");
        $I->wait(1);
        $I->pressKey("//input[@id='colours']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='colours']","Sea Green");
        $I->wait(1);
        $I->pressKey("//input[@id='colours']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@id='colours']","Rock Black");
        $I->wait(1);
        $I->pressKey("//input[@id='colours']", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//input[@name='quantity']","50");
        $I->wait(1);
        $I->attachFile("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-user-dashboard']/div[@class='he-user-dashboard__content']/div[@class='he-user-dashboard__content-wrap']/div[@id='myTabContent']/div[@id='profile']/div[@class='tab-content__info-wrap tab-content__info-width']/form[@class='form']/div[@class='form-group']/ul[@class='list-unstyled tab-content__info-grid']/li/div/input[1]", 'mb.pdf');
        $I->wait(1);
        $I->attachFile("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-user-dashboard']/div[@class='he-user-dashboard__content']/div[@class='he-user-dashboard__content-wrap']/div[@id='myTabContent']/div[@id='profile']/div[@class='tab-content__info-wrap tab-content__info-width']/form[@class='form']/div[@class='form-group']/ul[@class='list-unstyled tab-content__info-grid']/li/div/input[1]", '8mb.pdf');
        $I->wait(2);
        $I->attachFile("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-user-dashboard']/div[@class='he-user-dashboard__content']/div[@class='he-user-dashboard__content-wrap']/div[@id='myTabContent']/div[@id='profile']/div[@class='tab-content__info-wrap tab-content__info-width']/form[@class='form']/div[@class='form-group']/ul[@class='list-unstyled tab-content__info-grid']/li/div/input[1]", '9mb.pdf');
        $I->wait(2);
        $I->attachFile("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-user-dashboard']/div[@class='he-user-dashboard__content']/div[@class='he-user-dashboard__content-wrap']/div[@id='myTabContent']/div[@id='profile']/div[@class='tab-content__info-wrap tab-content__info-width']/form[@class='form']/div[@class='form-group']/div[@class='d-flex align-items-center']/ul[@class='list-unstyled tab-content__info-grid']/li/div/input[1]", '5mb.pdf');
        $I->wait(2);
        $I->fillField("//input[@name='terms']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->fillField("//input[@name='default_price']","5999");
        $I->wait(1);
        $I->fillField("//input[@name='discount_price']","2999");
        $I->wait(1);
        $I->fillField("//input[@name='coupon_code']","Be Eeclectic");
        $I->wait(1);
        $I->click("//div[@class='col-8']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//div[@aria-label='Choose Friday, September 10th, 2021']");
        $I->wait(2);
        $I->click("//div[@class='form-group row']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//div[@aria-label='Choose Sunday, October 10th, 2021']");
        $I->wait(2);
        $I->fillField("//input[@name='coupon_discount']","50%");
        $I->wait(1);
        // $I->attachFile("//div[@class='he-form--gray-bg']//div[@class='form-group']//div[@class='d-flex align-items-center']//ul[@class='list-unstyled tab-content__info-grid']//li//div//input[@type='file']", '5mb.pdf');
        // $I->wait(2);
        $I->wait(2);
        $I->fillField("//input[@name='terms']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->seeElement("//label[normalize-space()='Upload Image']");
        $I->wait(2);
        $I->wait(2);
        
        
        $I->attachFile("/html/body/div[1]/div/section[2]/div/div[2]/div[2]/div/div/div[2]/div/form/div[19]/div[1]/div/div/div/input", "mb.jpg");
        $I->attachFile("/html/body/div[1]/div/section[2]/div/div[2]/div[2]/div/div/div[2]/div/form/div[19]/div[1]/div/div/div/input", "chair2.jpg");
        $I->attachFile("/html/body/div[1]/div/section[2]/div/div[2]/div[2]/div/div/div[2]/div/form/div[19]/div[1]/div/div/div/input", "chair4.jpg");
        $I->wait(5);
        $I->fillField("//input[@placeholder='Write url']","www.klyp.com");
        $I->wait(2);
        $I->click("//button[normalize-space()='Save Product']");
        // $I->wait(5);
        $I->waitForText("Product info has been updated successfully.", 30);
        $I->see('Product info has been updated successfully.', "//span[normalize-space()='Product info has been updated successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(5);
        
        
        //........Editing functionality.....
        $I->click("//tbody/tr[1]/td[1]/span[1]/span[1]");
        $I->wait(2);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Edit']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write product name']",'Multi Functional Ladder ');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Write SKU']","AS-01-75500601");
        $I->wait(1);
        $I->click("//span[normalize-space()='VIC']");
        $I->click("//span[normalize-space()='WA']");
        $I->click("//span[normalize-space()='SA']");
        $I->click("//button[normalize-space()='Save Product']");
        $I->waitForText("Your product has been updated successfully.", 30);
        $I->see('Your product has been updated successfully.', "//p[@class='text-center']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Back to Listing']");
        $I->wait(5);
        
        //......Deletion of Products........
        $I->click("//tbody/tr[1]/td[1]/span[1]/span[1]");
        $I->wait(2);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Delete']");
        $I->wait(2);
        $I->waitForText("This will permanently remove your product from the list. This can not be undone.", 30);
        $I->see('This will permanently remove your product from the list. This can not be undone.', "//div[@class='modal-body-wrap']//p");
        $I->wait(2);
        $I->click("//button[normalize-space()='Delete']");
        $I->wait(5);
        

        
        
    }
}
