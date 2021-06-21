<?php 

// use Symfony\Component\BrowserKit\AbstractBrowser;
// use Symfony\Component\BrowserKit\Response;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->resizeWindow(1350, 750);
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->click('div.sf-toolbar.sf-display-none:nth-child(6) div.sf-toolbarreset.clear-fix a.hide-button:nth-child(10) svg:nth-child(1) > path:nth-child(1)');
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click("//div[normalize-space()='Sign In']");
        $I->wait(25);
        

        //..............................Page after login........................
        $I->see('Welcome Sukirti Belaura,', "//h1[normalize-space()='Welcome Sukirti Belaura,']");
        $I->see('Build your Homecca Account', "//p[@class='he-welcome-wrap__desc']");
        $I->wait(1);
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->see('Current Tasks', "//a[normalize-space()='Current Tasks']");
        $I->see('Completed Tasks', "//a[normalize-space()='Completed Tasks']");
        $I->see('Archived Tasks', "//a[normalize-space()='Archived Tasks']");
        $I->see('Project Diary', "//a[normalize-space()='Project Diary']");
        $I->seeElement("//a[@class='he-task-toolbar-item add-new-task-row']//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//div[@class='he-task-toolbar-wrap']//ul[1]//li[2]//a[1]//*[local-name()='svg']");
        $I->seeElement("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/ul[@class='list-unstyled he-task-toolbar-list']/li[3]/a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-task-toolbar-wrap']//li[4]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-body-content']//li[6]//a[1]//*[local-name()='svg']");
        $I->seeElement("//div[@class='he-body-content']//li[8]//a[1]//*[local-name()='svg']");
        $I->seeElement("//*[name()='path' and contains(@d,'M0.635206 ')]");
        $I->seeElement("//div[@class='he-body-content']//li[9]//a[1]//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//li[@id='showPreview']//a[@class='he-task-toolbar-item']//*[local-name()='svg']//*[name()='path' and contains(@fill-rule,'evenodd')]");
        $I->seeElement("//*[name()='path' and contains(@d,'M4.9375 6.')]");
        $I->seeElement("//a[@class='dropdown-toggle he-task-toolbar-item']//*[local-name()='svg']");
        $I->click("//a[@class='dropdown-toggle he-task-toolbar-item']//*[local-name()='svg']");
        $I->see('Export Excel', "//a[normalize-space()='Export Excel']");
        $I->see('Connect Calendar', "//a[normalize-space()='Connect Calendar']");
        $I->click("//a[normalize-space()='Connect Calendar']");
        $I->seeElement("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/div[@class='he-task-toolbar-list']/div[@class='btn-group dropup he-task-dropdown-wrap show']/div[@class='dropdown-menu he-task-dropdown show']/a[1]/span[1]/span[1]");
        $I->seeElement("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/div[@class='he-task-toolbar-list']/div[@class='btn-group dropup he-task-dropdown-wrap show']/div[@class='dropdown-menu he-task-dropdown show']/a[2]/span[1]/span[1]");
        $I->scrollTo('/html/body/div[1]/div/section[2]/aside/nav/ul[2]/li[3]/a/div/div/span');
        $I->wait(2);
        $I->click('/html[1]/body[1]/div[1]/div[1]/section[2]/aside[1]/nav[1]/ul[2]/li[3]/a[1]');
        $I->wait(5);
        $I->scrollTo('/html/body/div[1]/div/section[2]/aside/nav/ul[2]/li[3]/a/div/div/span');
        $I->click('/html[1]/body[1]/div[1]/div[1]/section[2]/aside[1]/nav[1]/ul[2]/li[3]/div[1]/div[1]/ul[1]/li[2]');
        $I->wait(2);

        //......................On logout page.........................
        $I->see('You are now logged out of Homecca', "//h1[contains(text(),'You are now')]");
        $I->click('div.main-wrap section.he-logout-section div.he-logout div.he-logout__wrap div:nth-child(3) > a:nth-child(1)');
        $I->see('The New Way to Build Your Dream Home Easy', "//div[@class='owl-item active']//h2[contains(text(),'The New Way to Build Your Dream Home Easy')]");
        $I->wait(2);

        //.........Log back in..................
        $I->fillField('//*[@id="signInEmail"]','sukirtibelaura@cedcoss.com');
        $I->fillField('//*[@id="signInPassword"]','Sukirti@123');
        $I->checkOption("//span[@class='checkmark']");
        $I->click("//div[normalize-space()='Sign In']");
        $I->wait(25);
        $I->seeInCurrentUrl('/daily-task');
        $I->wait(1);

    }
}
