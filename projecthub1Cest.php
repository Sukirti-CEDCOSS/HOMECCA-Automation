<?php 

class ProjectHubCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // Run if yours is fresh log-in and to creat new Project and New project task
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
        $I->wait(20);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
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
        $I->wait(5);
        $I->see('Create new project', "//button[normalize-space()='Create new project']");
        $I->wait(1);


        //.............To create New Project.............. 
        $I->click("//button[normalize-space()='Create new project']");
        $I->wait(2);
        $I->see('Create a new project', "//h5[normalize-space()='Create a new project']");
        $I->wait(1);
        $I->click("//h5[normalize-space()='Create a new project']");
        $I->wait(1);
        $I->click("//select[@placeholder='Select project type']");
        $I->wait(2);
        $I->click("/html/body/div[4]/div/div/div/div[2]/div/form/div[1]/select/optgroup[4]/option[1]");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Type project title']",'Nirvana');
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type project description']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type location ...']","220 Collins St, Melbourne VIC");
        $I->wait(1);
        $I->click("/html[1]/body[1]/div[4]/div[1]/div[1]/div[1]/div[2]/div[1]/form[1]/div[5]/div[1]/div[2]/div[1]/div[1]/div[1]/div[1]/div[1]/span[1]/img[1]");
        $I->wait(2);
        $I->click("/html[1]/body[1]/div[4]/div[1]/div[1]/div[1]/div[2]/div[1]/form[1]/div[5]/div[1]/div[2]/div[1]/div[1]/div[1]/div[1]/div[1]/span[1]/img[1]");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, July 15th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='ml-4']//img[@alt='Calendar']");
        $I->wait(1);
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
        $I->attachFile('//*[@id="createNewTask"]/div/div/div[2]/div/form/div[5]/div[2]/div/div[1]/div/div[2]/label/input', 'mb.jpg');
        $I->wait(1);
        // $I->attachFile('/html/body/div[4]/div/div/div/div[2]/div/form/div[5]/div[2]/div/div/div/div[2]/label/input', 'mb.jpg');
        // $I->wait(1);
        $I->click("//div[normalize-space()='Create']");
        $I->wait(3);
        $I->See('New project created successfully', "//span[normalize-space()='New project created successfully']");
        $I->wait(5);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(15);
        
        
        //............To create New Task...............
        $I->waitForText('Sukirti', 30);
        $I->scrollTo("//h1[contains(text(),'Sukirti')]");
        $I->wait(2);
        $I->click("//div[@class='he-body-content']//li[1]//div[1]//a[1]");
        $I->wait(15);
        $I->click("//a[normalize-space()='Tasks']");
        $I->wait(2);
        $I->see('Your Project tasks is empty', "//h3[normalize-space()='Your Project tasks is empty']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Start']");
        $I->wait(2);
        $I->see('Create a new task', "//h5[normalize-space()='Create a new task']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Write name']",'Placing Foundation');
        $I->wait(1);
        $I->click("//div[@class='he-datetime']//img[@alt='Calendar']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, June 10th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='he-datetime ml-2']//img[@alt='Calendar']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, August 5th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='he-datetime']//img[@alt='Time']");
        $I->wait(1);
        $I->click("//li[normalize-space()='9:30 AM']");
        $I->wait(1);
        $I->click("//div[@class='he-datetime ml-2']//img[@alt='Time']");
        $I->wait(1);
        $I->click("//li[normalize-space()='9:00 PM']");
        $I->wait(1);
        $I->click("//select[@id='status']");
        $I->wait(1);
        $I->click("/html/body/div[4]/div/div/div[2]/div/form/div[2]/div[2]/div[5]/select/option[3]");
        $I->wait(1);
        $I->click("//select[@id='priority']");
        $I->wait(1);
        $I->click("/html/body/div[4]/div/div/div[2]/div/form/div[2]/div[1]/div[3]/select/option[5]");
        $I->wait(1);
        $I->click("//select[@id='risk']");
        $I->wait(1);
        $I->click("/html/body/div[4]/div/div/div[2]/div/form/div[2]/div[1]/div[4]/select/option[4]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Budget($)']",'200k');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Cost($)']",'200k');
        $I->wait(1);
        $I->click("//div[@role='combobox']");
        $I->wait(1);
        $I->click("//span[@class='text']");
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type note']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
        $I->wait(1);
        $I->checkOption("//div[@class='d-flex']//span[@class='he-box']");
        $I->wait(1);
        $I->click("//button[@class='he-btn-primary']//div[contains(text(),'Save')]");
        $I->wait(5);
        $I->see('Your new task has been created successfully.', "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        







    }

}