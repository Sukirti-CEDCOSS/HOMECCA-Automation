<?php 

class ghantchartCest
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
        $I->wait(20);
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->click("//button[@class='he-header__navbar-hamburger']");
        $I->wait(1);
        $I->see('Manage', "//span[normalize-space()='Manage']");
        $I->click("//span[normalize-space()='Manage']");
        $I->wait(1);
        $I->see('Project Management', "//a[normalize-space()='Project Management']");
        $I->click("//a[normalize-space()='Project Management']");
        $I->wait(1);
        $I->see('Project Hub', "//a[normalize-space()='Project Hub']");
        $I->click("//a[normalize-space()='Project Hub']");
        $I->wait(2);
        $I->see('Create new project', "//button[normalize-space()='Create new project']");
        $I->wait(10);
        $I->scrollTo("//h1[contains(text(),'Sukirti')]");
        $I->wait(2);
        $I->click("//div[@class='he-body-content']//li[1]//div[1]//a[1]");
        $I->wait(10);
        
        
        //.......On Ghantchart Page..........
        $I->click("//a[normalize-space()='Gantt Chart']");
        $I->wait(2);
        $I->seeElement("//span[@class='timeline-tab']");
        $I->scrollTo("//span[@class='timeline-tab']");
        $I->wait(2);
        $I->seeElement("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[2]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[3]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[4]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[5]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[6]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[7]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-dashboard he-white-bg']//li[8]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-body-content']//li[9]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-body-content']//li[10]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-body-content']//li[11]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        

        //......Testing Link option....
        $I->checkOption("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//ul[2]//li[1]//a[1]//*[local-name()='svg']");


        //......Testing Un-Link option....
        $I->checkOption("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[2]//a[1]//*[local-name()='svg']");
        $I->wait(2);
        
        //......Move up and Move Down......        
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[4]//a[1]");
        $I->wait(1);
        $I->checkOption("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[5]//a[1]");
        $I->wait(1);
        
        //....Test Indentation.....
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[6]//a[1]//*[local-name()='svg']");
        $I->wait(1);
        $I->checkOption("//tr[@class='he-task-table__daily-task--child']//span[@class='he-box']");
        $I->wait(1);
        $I->click("//div[@class='he-dashboard he-white-bg']//li[7]//a[1]//*[local-name()='svg']");
        $I->wait(1);
        
        //.....Test Clear........
        $I->checkOption("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[10]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->wait(1);
        $I->reloadPage();
        $I->wait(10);
        $I->scrollTo("//tr[@class='he-task-table__daily-task--parent he-task-table__add-row']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->click("//div[normalize-space()='Save']");
        $I->wait(1);
        $I->see('All tasks updated successfully.', "//p[normalize-space()='All tasks updated successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        
        //.....Date filtering.......
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap']//img[@alt='calendar']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, March 25th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap ml-2']//img[@alt='calendar']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, April 1st, 2021']");
        $I->wait(2);
        $I->dontSeeElement('//tbody/tr[2]/td[1]/label[1]/span[1]');





        
    }
}
