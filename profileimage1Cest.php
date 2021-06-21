<?php 

class profileimage1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // This Code is to run when you have already upoaded the profile pic or cover pic 
        $I->amOnPage('/login');
        $I->wait(1);
        $I->resizeWindow(1370, 755);
        $I->wait(1);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click('/html/body/div[1]/div/main/div/div[2]/section/div[1]/div/div/div[2]/form/button[1]/div');
        $I->wait(30);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
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
        
        
        //.......Profile Image Upload..........
        $I->wait(2);
        $I->moveMouseOver("//span[@class='he-profile__no-img']");
        $I->wait(2);
        $I->click("//div[@class='he-banner__profile-info']//a[1]");
        $I->wait(2);
        $I->attachFile("/html/body/div[4]/div/div/div[2]/div/div[1]/div[2]/div/div/input", 'mb.jpg');
        $I->wait(2);
        
        //......Delete Image......
        $I->click("//img[@alt='delete']");
        $I->wait(2);
        $I->attachFile("/html/body/div[4]/div/div/div[2]/div/div[1]/div[2]/div/div/input", 'mb.jpg');
        $I->wait(2);
        
        //.....Zoom out feature
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->wait(2);
        
        //.......Zoom in Feature
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->wait(2);
        
        // Image fit feature
        $I->click("//img[@alt='fit image']");
        $I->wait(2);
        
        //.....Rotate left feature....
        $I->click("//img[@alt='rotate left']");
        $I->wait(2);
        
        //.....Rotate right freature....
        $I->click("//img[@alt='rotate right']");
        $I->wait(2);
        
        //......Save image feature.....
        $I->click("//button[normalize-space()='Save']");
        $I->waitForText("Profile photo has been updated successfully.", 30);
        $I->see('Profile photo has been updated successfully.', "//span[normalize-space()='Profile photo has been updated successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        
        
        
        //.......................Upload Cover Image.....................
        $I->wait(2);
        $I->moveMouseOver("//img[@alt='profile image']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Update cover photo']");
        $I->wait(2);
        $I->attachFile("/html/body/div[4]/div/div/div[2]/div/div[1]/div[2]/div/div/input", 'mb.jpg');
        $I->wait(2);
        
        //......Delete Image......
        $I->click("//img[@alt='delete']");
        $I->wait(2);
        $I->attachFile("/html/body/div[4]/div/div/div[2]/div/div[1]/div[2]/div/div/input", 'mb.jpg');
        $I->wait(2);
        
        //.....Zoom out feature
        $I->scrollTo("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->click("//img[@alt='zoom out']");
        $I->wait(2);
        
        //.......Zoom in Feature
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->click("//img[@alt='zoom in']");
        $I->wait(2);
        
        // Image fit feature
        $I->click("//img[@alt='fit image']");
        $I->wait(2);
        
        //.....Rotate left feature....
        $I->click("//img[@alt='rotateleft']");
        $I->wait(2);
        
        //.....Rotate right freature....
        $I->click("//img[@alt='rotateright']");
        $I->wait(2);
        
        //......Save image feature.....
        $I->click("//button[normalize-space()='Save']");
        $I->waitForText("Cover photo has been updated successfully.", 30);
        $I->see('Cover photo has been updated successfully.', "//span[normalize-space()='Cover photo has been updated successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
    }
}
