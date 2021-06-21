<?php 

class variationCest
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
        $I->seeInCurrentUrl('/daily-task');
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
        $I->wait(20);
        $I->click("//div[@class='he-body-content']//li[1]//div[1]//a[1]");
        $I->wait(2);
        // $I->wait(20);
        
        
        //..............On Dashboard page.....................
        $I->click("//a[normalize-space()='Dashboard']");
        $I->wait(1);
        $I->see('Nirvana', "//h2[normalize-space()='Nirvana']");
        $I->see('Tasks', "//a[normalize-space()='Tasks']");
        $I->see('Gantt Chart', "//a[normalize-space()='Gantt Chart']");
        $I->see('Team', "//a[normalize-space()='Team']");
        $I->see('Variations', "//a[normalize-space()='Variations']");
        $I->see('Documents', "//a[normalize-space()='Documents']");
        $I->see('Project Diary', "//a[normalize-space()='Project Diary']");
        $I->seeElement("//div[@class='he-dashboard__summary-today']//h2[1]");
        $I->seeElement("//body[1]/div[1]/div[1]/section[2]/div[1]/div[4]/div[2]/ul[1]/li[3]/div[2]/h2[1]");
        $I->seeElement("//body[1]/div[1]/div[1]/section[2]/div[1]/div[4]/div[2]/ul[1]/li[4]/div[2]/h2[1]");
        
        //...........On Variation page...........
        $I->click("//a[normalize-space()='Variations']");
        $I->wait(2);
        $I->click("//button[normalize-space()='New Variation']");
        $I->wait(2);
        $I->click("//div[contains(@class,'css-1hwfws3')]");
        $I->wait(1);
        $I->fillField("#react-select-3-input",'Survey');
        $I->wait(1);
        $I->pressKey("#react-select-3-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//div[@class='he-dashboard__variation-filter']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, May 20th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='form-group row']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, June 10th, 2021']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Type your Planned cost']",'3499');
        $I->wait(1);
        $I->click("//form[@class='form-inline']//img[@alt='calendar']");
        $I->wait(2);
        $I->click("//div[@aria-label='Choose Thursday, May 20th, 2021']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Customize Task List']");
        $I->wait(1);
        $I->checkOption("//li[normalize-space()='Survey']//span[@class='he-box']");
        $I->wait(1);
        $I->click("//div[normalize-space()='Add to list']");
        $I->wait(1);
        
        //......Filling Value For Heading......
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[4]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit']",'foot');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[5]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[5]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Quantity']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[6]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[6]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit Price']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[7]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[7]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Disc']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[8]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--parent']/td[8]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Markup']",'40');
        $I->wait(1);
        
        
        
        //......Filling Value For Task......
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[4]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[4]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit']",'Per set');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[5]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[5]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Quantity']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[6]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[6]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Unit Price']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[7]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[7]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Add Disc']",'40');
        $I->wait(1);
        $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[8]/span[1]");
        $I->wait(1);
        // $I->click("//tbody/tr[@class='he-task-table__daily-task--child']/td[8]/span[1]");
        // $I->wait(1);
        $I->fillField("//input[@placeholder='Add Markup']",'40');
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type note']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
        $I->wait(1);
        $I->click("//button[normalize-space()='save']");
        $I->wait(5);
        
        //..........Testing of "Edit" Option..............
        $I->click("//tbody/tr[1]/td[2]/span[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Edit']");
        $I->wait(5);
        $I->fillField("//input[@placeholder='Type your Planned cost']",'500');
        $I->wait(1);
        $I->attachFile('//*[@id="he_file_uploader"]', 'mb.pdf');
        $I->wait(1);
        $I->click("//button[normalize-space()='save']");
        $I->wait(5);
        
        //..........Testing of "Delete" Option..............
        $I->click("//tbody/tr[1]/td[2]/span[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='dropdown-menu he-task-dropdown show']//a[@class='dropdown-item'][normalize-space()='Delete']");
        $I->wait(1);
        $I->see('This will permanently remove your variation from the list. This can not be undone.', "//span[contains(text(),'This will permanently remove your variation from t')]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Delete']");
        $I->wait(5);










       


        

        

    }
}
