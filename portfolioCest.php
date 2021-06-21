
<?php 
//https://www.awesomescreenshot.com/video/3008352?key=a3c3c8403434071c9bb8b1bab82da33a

class portfolioCest
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
        $I->see('Project Portfolio', "//a[normalize-space()='Project Portfolio']");
        $I->wait(1);
        $I->click("//a[normalize-space()='Project Portfolio']");
        $I->wait(2);
        $I->seeInCurrentUrl('/project-portfolio/projects');
        $I->wait(1);
        $I->see('Project Portfolio', "//h2[normalize-space()='Project Portfolio']");
        $I->wait(1);
        $I->see('Create Project', "//button[normalize-space()='Create Project']");
        $I->wait(1);
        $I->see('Create Portfolio', "//button[normalize-space()='Create Portfolio']");
        $I->wait(1);
        $I->seeElement("//div[@class='he-dashboard']//h2[1]");
        $I->wait(1);
        
        //.......Creating Project.........
        $I->click("//button[normalize-space()='Create Project']");
        $I->wait(1);
        
        //.........On Project Page........
        $I->seeInCurrentUrl('/project-portfolio/projects/create');
        $I->wait(1);
        $I->see('Create a new project', "//h2[normalize-space()='Create a new project']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type project name']",'Flex');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type project address']",'Lucknow, India');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type project value']",'20 k');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type year of completion']",'2021');
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type project owner']",'Sukirti Belaura');
        $I->wait(1);
        $I->click("//div[@class=' css-1wa3eu0-placeholder']");
        $I->wait(1);
        $I->fillField("#react-select-3-input",'Residential');
        $I->wait(1);
        $I->pressKey("#react-select-3-input", \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Write testimonial']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->click("//a[normalize-space()='Add New Testimonial']");
        $I->wait(1);
        $I->fillField("//textarea[2]","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->attachFile("/html/body/div[1]/div/section[2]/div/div[2]/div[1]/div[1]/div/div[1]/div/div/input", 'mb.jpg');
        $I->wait(2);
        $I->attachFile("/html/body/div[1]/div/section[2]/div/div[2]/div[1]/div[1]/div/div[1]/div/div/input", 'mb.jpg');
        $I->wait(2);
        $I->click("//button[normalize-space()='Save']");
        $I->wait(7);
        
        
        //..........Create Protfolio.........
        $I->see('Create Portfolio', "//button[normalize-space()='Create Portfolio']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Create Portfolio']");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Write name']","Residential Farms");
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Type portfolio description']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->scrollTo("//li[1]//div[2]//h2[1]");
        $I->wait(1);
        $I->click("//div[@role='dialog']//li[2]//div[2]");
        $I->wait(1);
        $I->click("//div[@role='dialog']//li[1]//div[2]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Create']");
        $I->wait(3);
        $I->see('Portfolio has been created successfully.', "//span[normalize-space()='Portfolio has been created successfully.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        
        //.......Adding Project To Portfolio........
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-dashboard']/div[@class='he-dashboard__project-listing-wrap']/div[@class='he-dashboard__project-items-wrap']/ul[@class='list-unstyled']/li[1]/div[1]/span[1]");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Search portfolio']","Residential Farms");
        $I->wait(2);
        $I->click("//div[@class='he-modal__portfolio-items-info']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        
        
        //.....Deleting Portfolio.........
        $I->click("//a[normalize-space()='Portfolio']");
        $I->wait(1);
        $I->click("//li[1]//div[1]//div[1]//img[1]");
        $I->wait(1);
        $I->click("//img[@alt='delete']");
        $I->wait(1);
        $I->see('This portfolio will be deleted forever.', "//span[normalize-space()='This portfolio will be deleted forever.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Delete']");
        $I->wait(1);


        //.....Deleting project.........
        $I->click("//a[@class='nav-link'][normalize-space()='Projects']");
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-dashboard']/div[@class='he-dashboard__project-listing-wrap']/div[@class='he-dashboard__project-items-wrap']/ul[@class='list-unstyled']/li[1]/div[1]");
        $I->wait(1);
        $I->wait(1);
        $I->click("//img[@alt='delete']");
        $I->wait(1);
        $I->see('This project will be deleted forever.', "//span[normalize-space()='This project will be deleted forever.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Delete']");
        $I->wait(1);
    
        
        

        
        
        
        








    }
}
