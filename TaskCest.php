<?php 

class TaskCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        //This scripts is when you have no task created in your daily task
        $I->amOnPage('/login');
        $I->wait(2);
        $I->resizeWindow(1350, 750);
        $I->wait(2);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);
        $I->click('div.sf-toolbar.sf-display-none:nth-child(6) div.sf-toolbarreset.clear-fix a.hide-button:nth-child(10) svg:nth-child(1) > path:nth-child(1)');
        $I->wait(2);
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click("//div[normalize-space()='Sign In']");
        $I->wait(25);
        //Page after login
       
        $I->seeInCurrentUrl('/daily-task');
        $I->wait(1);
        


        //...................Creation of task............................

        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//span[@class='he-add']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write title']",'Task (With Date & Time)');
        $I->wait(1);
        //Selection of date
        $I->click("//div[@class='he-datetime']//img[@alt='Calender']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, August 5th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='he-datetime ml-2']//img[@alt='Calender']");
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, September 30th, 2021']");
        $I->wait(1);
        //Selection of time
        $I->click("//div[@class='he-datetime']//img[@alt='Time']");
        $I->wait(1);
        $I->click("//li[normalize-space()='8:30 AM']");
        $I->wait(1);
        $I->click("//div[@class='he-datetime ml-2']//img[@alt='Time']");
        $I->wait(1);
        $I->click("//li[normalize-space()='5:00 PM']");
        $I->wait(1);
        //Entering Location
        $I->fillField("//input[@placeholder='Type location ...']",'98 Shirley Street PIMPAMA QLD 4209');
        $I->wait(1);

        $I->click("//div[@role='combobox']");
        $I->wait(1);
        $I->click("//div[@role='combobox']");
        $I->wait(1);
        $I->wait(1);
        //Entering Note
        $I->click("//div[@role='option']");
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type note']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(2);
        $I->click("//div[@class='text-left modal-footer']//button[1]");
        $I->wait(2);
        $I->see("Your new task has been created successfully.", "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        $I->click("//div[normalize-space()='Save']");
        $I->wait(2);
        $I->see("All daily tasks saved.", "//span[normalize-space()='All daily tasks saved.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(3);

        //Task1 created


       
                
        
    }

}
