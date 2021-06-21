<?php 

class ProfileNameChangeCest
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
        $I->wait(1);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click('/html/body/div[1]/div/main/div/div[2]/section/div[1]/div/div/div[2]/form/button[1]/div');
        $I->wait(25);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->scrollTo('/html/body/div[1]/div/section[2]/aside/nav/ul[2]/li[3]/a/div/div/span');
        $I->wait(5);
        $I->click("/html[1]/body[1]/div[2]/div[3]/a[1]/*[local-name()='svg'][1]");
        $I->wait(2);
        $I->click("//span[@class='he-profile__no-img-36']");
        $I->wait(2);
        $I->click("//div[@class='dropdown-menu show']//h4[contains(text(),'My Profile')]");
        $I->wait(2);
        $I->click("//a[normalize-space()='Profile Info']");
        $I->wait(2);
        $I->see('My Profile', "//li[@class='active']//h4[contains(text(),'My Profile')]");
        $I->see('Company Profile', "//h4[normalize-space()='Company Profile']");
        $I->see('Products', "//h4[normalize-space()='Products']");
        $I->see('Logout', "//div[@class='he-user-dashboard__sidebar']//h4[contains(text(),'Logout')]");
        $I->wait(2);

                //..........Personal Info..............
        $I->fillField('first_name','Sukirti');
        $I->fillField('last_name','Belaura');
        $I->click("//div[contains(@class,'css-1uccc91-singleValue')]");
        $I->wait(2);
        $I->fillField("#react-select-2-input",'+61');
        $I->wait(1);
        $I->pressKey("#react-select-2-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->fillField("//input[@placeholder='Mobile No.']",'0745328752');
        $I->wait(2);
        $I->click("//div[@id='home']//button[@type='button'][normalize-space()='Update']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->see('Hooray', "//div[@class='modal-content']");
        $I->wait(2);

                //..................Contact Info.................
        $I->click("//a[normalize-space()='Contact Info']");
        $I->wait(2);
        $I->click('//*[@id="profile"]/div/form/div[1]/div/div/div[1]');
        $I->fillField('#react-select-3-input','Australia');
        $I->pressKey("#react-select-3-input", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->click("//div[contains(text(),'Select state')]");
        $I->wait(2);
        $I->fillField('#react-select-4-input','Queensland');
        $I->wait(2);
        $I->pressKey("#react-select-4-input", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(2);
        $I->fillField('city','YULABILLA');
        $I->wait(2);
        $I->fillField("//input[@name='postcode']",'4416');
        $I->wait(2);
        $I->fillField('street','22 Lowe Street');
        $I->wait(2);
        $I->scrollTo("div[id='profile'] button[type='button']");//Solling to the bottom
        $I->wait(2);
        $I->click("//div[@id='profile']//button[@type='button'][normalize-space()='Update']");
        $I->wait(2);
        $I->see('Contact info has been updated successfully.', "//p[normalize-space()='Contact info has been updated successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        

               //.................Pasword Change..................
        $I->scrollTo("//h1[@class='he-banner__profile-name']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Password']");
        $I->wait(2);
        $I->click("//div[@class='tab-content__info-wrap']//div[1]//div[1]//img[1]");
        $I->wait(1);
        $I->fillField("//input[@name='current_password']",'Sukirti@123');
        $I->wait(1);
        $I->click("//div[@class='he-user-dashboard__content']//div[2]//div[1]//img[1]");
        $I->wait(1);
        $I->fillField("//input[@name='password']",'Sukirti@123');
        $I->wait(1);
        $I->click("//div[@id='contact']//div[3]//div[1]//img[1]");
        $I->wait(1);
        $I->fillField("//input[@name='password_confirmation']",'Sukirti@123');
        $I->wait(1);
        $I->click("//div[@id='contact']//button[@type='button'][normalize-space()='Update']");
        $I->wait(2);
        $I->see('Password has been changed successfully.', "//p[normalize-space()='Password has been changed successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        
        
    }
}
