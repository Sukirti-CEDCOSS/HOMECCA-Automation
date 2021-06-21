<?php 

class ProjectHubCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        //To run when Task in Project Hub has been already created
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
        $I->wait(2);
        $I->see('Create new project', "//button[normalize-space()='Create new project']");
        $I->wait(10);
        $I->scrollTo("//h1[contains(text(),'Sukirti')]");
        $I->wait(2);
        $I->click("//div[@class='he-body-content']//li[1]//div[1]//a[1]");
        $I->wait(2);
        $I->click("//a[normalize-space()='Tasks']");
        $I->wait(2);
        

               //  ..................Testing for the Deletion of task...................        
        $I->checkOption("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(2);
        $I->click("//div[@class='he-body-content']//li[11]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(1);
        $I->waitForText("Are you sure you want to delete the selected task ?", 30);
        $I->see('Are you sure you want to delete the selected task ?', "//span[contains(text(),'Are you sure you want to delete the selected task ')]");
        $I->wait(2);
        $I->click("//button[normalize-space()='OK']");
        $I->wait(2);
        $I->click("//div[normalize-space()='Save']");
        $I->wait(1);
        $I->See('All tasks updated successfully.', "//p[normalize-space()='All tasks updated successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        $I->reloadPage();
        $I->wait(20);


            //..............On Dashboard page.....................
        $I->click("//a[normalize-space()='Dashboard']");
        $I->wait(2);
        $I->see('Nirvana', "//h2[normalize-space()='Nirvana']");
        $I->see('Tasks', "//a[normalize-space()='Tasks']");
        $I->see('Gantt Chart', "//a[normalize-space()='Gantt Chart']");
        $I->see('Team', "//a[normalize-space()='Team']");
        $I->see('Variations', "//a[normalize-space()='Variations']");
        $I->see('Documents', "//a[normalize-space()='Documents']");
        $I->see('Project Diary', "//a[normalize-space()='Project Diary']");
        $I->seeElement("//div[@class='he-dashboard__summary-today']//h2[1]");
        $I->wait(5);

        //...........On Task Page............
        $I->click("//a[normalize-space()='Tasks']");
        $I->wait(2);
        $I->seeElement("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[2]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[3]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[4]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[5]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[6]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[7]//a[1]//*[local-name()='svg']");
        $I->seeElement("//*[name()='path' and contains(@d,'M15.3648 4')]");
        $I->seeElement("//div[@class='he-body-content']//li[9]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-body-content']//li[10]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-body-content']//li[11]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        
        //...........Creating NEW TASK...................
        $I->click("//tr[@class='he-task-table__daily-task--parent he-task-table__add-row']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->see('Create a new task', "//h5[normalize-space()='Create a new task']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Write name']",'Survey');
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
        
        
        //......Testing Link option....
        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']");
        $I->wait(1);


        //......Testing Un-Link option....
        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[2]//a[1]//*[local-name()='svg']");
        $I->wait(1);
        
        //......Move up and Move Down        
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[4]//a[1]");
        $I->wait(2);
        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[5]//a[1]");
        $I->wait(1);
        
        //....Test Indentation.....
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->click("//div[@class='he-dashboard he-white-bg']//li[6]//a[1]//*[local-name()='svg']");
        $I->wait(1);
        $I->click("//tr[@class='he-task-table__daily-task--child']//span[@class='he-box']");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[7]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(1);
        
        //.....Test Clear........
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[10]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(1);
        $I->reloadPage();
        $I->wait(25);
        $I->click("//div[normalize-space()='Save']");
        $I->wait(1);
        $I->see('All tasks updated successfully.', "//p[normalize-space()='All tasks updated successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        
             // .............Date filtering.......
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap']//img[@alt='calendar']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, June 3rd, 2021']");
        $I->wait(1);
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap ml-2']//img[@alt='calendar']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, May 6th, 2021']");
        $I->wait(2);
        $I->dontSeeElement('//tbody/tr[2]/td[1]/label[1]/span[1]');



        //................Enviting the Team Member................
        $I->click("//a[normalize-space()='Team']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Search to add user(s)']","kavita mishra");
        $I->wait(1);
        $I->click("//span[@class='name']");
        $I->wait(2);
        $I->see('Are you sure to invite this user ?', "//p[normalize-space()='Are you sure to invite this user ?']");
        $I->wait(1);
        $I->click("//button[normalize-space()='OK']");
        $I->wait(2);
        if ($I->see('Already a member', "//p[normalize-space()='Already a member']")){
            $I->wait(1);
            $I->click("//button[normalize-space()='OK']");

        }
        else{
            $I->wait(1);
            $I->click("//button[normalize-space()='OK']");

        }
        $I->wait(2);


        





        
        
        
        
        
        
    }
}
