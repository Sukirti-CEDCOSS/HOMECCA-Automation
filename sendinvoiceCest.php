<?php 

class sendinvoiceCest
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
        $I->see('Build', "//span[normalize-space()='Build']");
        $I->wait(1);
        $I->click("//span[normalize-space()='Build']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Invoices']");
        $I->wait(1);
        $I->seeElement("//div[@class='he-body-content']//li[6]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[5]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[4]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[3]//a[1]");
        $I->seeElement("//div[@class='he-body-content']//li[2]//a[1]");
        $I->seeElement("//li[@class='list-inline-item active']//a[@class='nav-link']");
        // $I->click("//a[normalize-space()='Invoices']");
        $I->wait(5);
        
        //.....Edit option........
        $I->seeElement("//tbody/tr[1]/td[2]/span[1]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[1]/td[2]/span[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Edit']");
        $I->wait(1);
        $I->scrollTo("//button[normalize-space()='send']");
        $I->wait(1);
        $I->click("//button[normalize-space()='send']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='name@email.com']",'aa@aa.com');
        $I->wait(1);
        $I->scrollTo("//div[@role='dialog']//div[4]//label[1]//input[1]");
        $I->checkOption("//div[@role='dialog']//div[4]//label[1]//input[1]");
        $I->wait(1);
        $I->wait(1);
        $I->click("//button[normalize-space()='Send']");
        $I->wait(1);
        $I->seeElement("//tbody/tr[1]/td[2]/span[1]/span[1]");
        $I->wait(1);









    }
}
