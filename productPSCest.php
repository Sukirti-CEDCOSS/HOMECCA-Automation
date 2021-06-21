<?php 

class productPSCest
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
        
        
        //.......Navigation to Professional Services..........
        $I->click("//button[@class='he-header__navbar-hamburger']");
        $I->wait(2);
        $I->click("//span[@class='menu-title show'][normalize-space()='Connect']");
        $I->wait(1);
        $I->click("//a[@value='1'][normalize-space()='Products']");
        $I->wait(1);
        $I->click("//a[@class='dropdown-item dropdown-toggle'][normalize-space()='Furniture']");
        $I->wait(1);
        $I->click("//a[@class='dropdown-item dropdown-toggle'][normalize-space()='Living Room Furniture']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Sofas']");
        $I->wait(5);
        $I->see('Sofas', "//h2[normalize-space()='Sofas']");
        $I->see('Not sure where to start? Let Homecca match you with local professionals and suppliers.', "//h2[contains(text(),'Not sure where to start? Let Homecca match you wit')]");
        $I->see('Location', "//label[normalize-space()='Location']");
        $I->see('Style', "//label[normalize-space()='Style']");
        $I->see('Price range', "//label[normalize-space()='Price range']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Velvet Chair']");
        $I->wait(5);
        $I->seeElement("//div[@class='he-product__col he-product__description']//div[2]//a[1]//button[1]");
        $I->wait(2);
        $I->click("//div[normalize-space()='Select your model']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//span[normalize-space()='m3']");
        $I->wait(2);
        $I->click("//span[normalize-space()='m5']");
        $I->wait(2);
        $I->click("//span[@class='he-table__toggle active']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//div[normalize-space()='Select your colour']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//span[normalize-space()='c3']");
        $I->wait(2);
        $I->click("//span[@class='he-table__toggle active']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//span[@class='he-table__toggle active']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//span[normalize-space()='5']");
        $I->wait(2);
        $I->click("//span[@class='he-table__toggle active']//img[@alt='arrow']");
        $I->wait(2);
        $I->click("//tbody/tr[11]/td[2]/div[1]/div[1]/span[3]/a[1]/img[1]");
        $I->wait(2);
        $I->scrollTo("//div[5]//a[1]//button[1]");
        $I->seeElement("//div[5]//a[1]//button[1]");
        $I->see('About This Seller', "//a[normalize-space()='About This Seller']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Product Review']");
        $I->see('Product Review', "//a[normalize-space()='Product Review']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Questions/Comments']");
        $I->see('Questions/Comments', "//a[normalize-space()='Questions/Comments']");
        $I->wait(2);
        $I->pressKey("//textarea[@placeholder='Add a comment']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
        $I->wait(2);
        $I->click("//button[normalize-space()='Comment']");






    }
}
