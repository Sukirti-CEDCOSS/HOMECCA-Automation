<?php 

class projecthubCest
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
        $I->wait(30);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->click("//button[@class='he-header__navbar-hamburger']");
        $I->wait(1);
        $I->see('Manage', "//span[normalize-space()='Manage']");
        $I->wait(1);
        $I->click("//span[normalize-space()='Manage']");
        $I->wait(1);
        $I->see('Project Management', "//a[normalize-space()='Project Management']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Project Management']");
        $I->wait(1);
        $I->see('Project Hub', "//a[normalize-space()='Project Hub']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Project Hub']");
        $I->wait(10);
        $I->click("//div[@class='he-body-content']//li[1]//div[1]//a[1]");
        $I->wait(15);
        
        //...............On Project diary page..............
        $I->click("//a[normalize-space()='Project Diary']");
        $I->wait(2);
        $I->seeElement("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Create']");
        $I->wait(2);
        $I->fillField("//input[@id='subject']",'Testing for message');
        $I->wait(2);
        $I->fillField("//input[@id='toMailId']",'Sukirti Belaura');
        $I->wait(2);
        $I->fillField("//input[@id='ccMailId']",'Sukirti Belaura');
        $I->wait(2);
        $I->fillField("//div[@class='ql-editor ql-blank']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        //........Bold.........
        $I->click("//button[@class='ql-bold']");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        //.......Italic.......
        $I->click("//button[@class='ql-italic']");
        $I->wait(2);
        $I->pressKey("//p[2]",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        //........Strike........
        $I->click("//button[@class='ql-strike']");
        $I->wait(2);
        $I->pressKey("//p[3]",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        //.......Underline......
        $I->click("//button[@class='ql-underline']");
        $I->wait(2);
        $I->pressKey("//p[4]",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        
        $I->click("//li[11]//button[1]");
        $I->wait(2);
        
        //.......Ordered.......
        $I->click("//button[@value='ordered']");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']//ol//li",'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->pressKey("//div[@class='quill ']//li[2]","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->pressKey("//div[contains(@class,'quill')]//li[3]","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        
        //........IncreaseIndent.......
        $I->click("//img[@src='http://localhost/build/images/icon-increaseIndent.svg']");
        

        //.......Bullet.......
        $I->click("//img[@src='http://localhost/build/images/icon-list-bullet.svg']");
        $I->pressKey("//div[@class='ql-editor']//ol//li","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->pressKey("//div[@class='quill ']//li[2]","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->pressKey("//div[contains(@class,'quill')]//li[3]","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']",Facebook\WebDriver\WebDriverKeys::ENTER);


        //..........DecreseIndent..................
        $I->click("//img[@src='http://localhost/build/images/icon-decreseIndent.svg']");
        $I->wait(2);
        $I->pressKey("//div[@class='ql-editor']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        

        //.......Add Attachment.....
        $I->attachFile('//*[@id="he_file_uploader"]', 'mb.jpg');
        $I->wait(1);
        $I->checkOption('//*[@id="root"]/div/section[2]/div/div[4]/div[2]/div[3]/form/div/div[1]/div[1]/label[1]/span');
        $I->checkOption('//*[@id="root"]/div/section[2]/div/div[4]/div[2]/div[3]/form/div/div[1]/div[2]/label[1]');
        $I->wait(1);
        $I->click("//li[11]//button[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(2);
        $I->fillField("//div[@class='ql-editor ql-blank']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        
        //.....Sending the mail.....
        $I->click("//button[normalize-space()='Save & Send']");
        $I->wait(2);
        $I->waitForText('Project Diary has been successfully send', 60);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        
        //...........Replying to Message...........
        $I->click("//div[@class='he-project-diary__msg-panel he-deliver-msg']//button[1]");
        $I->wait(2);
        $I->fillField("//div[@class='he-project-diary__msg-panel he-deliver-msg']//div[@class='ql-editor ql-blank']","Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $I->wait(2);
        $I->attachFile('//*[@id="he_file_uploader"]', 'mb.jpg');
        $I->wait(1);
        $I->click("//div[@class='he-project-diary__msg-panel he-deliver-msg']//div[@class='he-project-diary__msg-panel']//button[2]");
        $I->wait(2);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Save & Send']");
        $I->wait(2);
        $I->wait(2);
        
        








    }
}
