<?php 

class PSCest
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
        $I->wait(2);
        $I->click("//a[normalize-space()='Professional Services']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Design']");
        $I->wait(2);
        $I->click("//a[@class='dropdown-item dropdown-toggle'][normalize-space()='Architects']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Residential Architect']");
        $I->wait(2);
        $I->seeInCurrentUrl('/services/16');
        $I->see('Softoinic', "//a[normalize-space()='Softoinic']");
        $I->see('Email', "//button[normalize-space()='Email']");
        $I->see('Call Now', "//button[normalize-space()='Call Now']");
        $I->see('request a call back', "//button[normalize-space()='request a call back']");
        $I->wait(2);
        $I->click("//a[normalize-space()='Softoinic']");
        $I->wait(2);
        $I->see('About Us', "//a[normalize-space()='About Us']");
        $I->see('projects', "//a[@id='projects-tab']");
        $I->see('Portfolios', '//*[@id="portfolios-tab"]');
        $I->see('Products', "//a[@id='products-tab']");
        $I->see('Reviews', "//a[normalize-space()='Reviews']");
        $I->see('Quotes', "//a[@id='quotes-tab']");
        $I->see('Invoices', "//a[@id='invoices-tab']");
        $I->see('Website', "//h4[normalize-space()='Website']");
        $I->see('Typical Job Costs:', "//h4[normalize-space()='Typical Job Costs:']");
        $I->see('Category', "//h4[normalize-space()='Category']");
        $I->see('Professional Information:', "//h4[normalize-space()='Professional Information:']");
        $I->seeElement("//img[@alt='favourite']");
        $I->see('Add to Favourite', "//h5[normalize-space()='Add to Favourite']");
        $I->see('Projects', "//h2[normalize-space()='Projects']");
        $I->see('Portfolios', '//*[@id="portfolios-tab"]');

        //.......Projects......
        $I->click("//a[@id='projects-tab']");
        $I->wait(2);

        //........Portfolio.......
        $I->click("//a[normalize-space()='Portfolios']");
        $I->wait(2);

        //........Products......
        $I->click("//a[@id='products-tab']");
        $I->wait(2);
        
        
        //........Fill Review form.........
        $I->click("//a[normalize-space()='Reviews']");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[2]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[3]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[4]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='form-group']//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Choose one']");
        $I->wait(2);
        $I->fillField("#react-select-9-input",'Client');
        $I->wait(1);
        $I->pressKey("#react-select-9-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//div[@class='row']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='react-datepicker__month-text react-datepicker__month-5']");
        $I->wait(2);
        $I->click("//div[@class='form-group row']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//div[normalize-space()='2021']");
        $I->wait(2);
        $I->click("//div[@class='col']//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Choose one']");
        $I->wait(2);
        $I->fillField("#react-select-10-input",'$500 - $2,000');
        $I->wait(1);
        $I->pressKey("#react-select-10-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->fillField("//textarea[@placeholder='Your review helps others decide on the right professionals for them. Please share your experiences with this professional.']","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
        $I->wait(1);
        $I->click("//a[normalize-space()='Reviews']");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[2]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[3]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='he-review-write']//li[4]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='form-group']//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Choose one']");
        $I->wait(2);
        $I->fillField("#react-select-9-input",'Client');
        $I->wait(1);
        $I->pressKey("#react-select-9-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->click("//div[@class='row']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//div[@class='react-datepicker__month-text react-datepicker__month-5']");
        $I->wait(2);
        $I->click("//div[@class='form-group row']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//div[normalize-space()='2021']");
        $I->wait(2);
        $I->click("//div[@class='col']//div[contains(@class,'css-1wa3eu0-placeholder')][normalize-space()='Choose one']");
        $I->wait(2);
        $I->fillField("#react-select-10-input",'$500 - $2,000');
        $I->wait(1);
        $I->pressKey("#react-select-10-input",Facebook\WebDriver\WebDriverKeys::ENTER); 
        $I->wait(1);
        $I->checkOption("//span[@class='he-box']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Review']");
        $I->wait(2);
        $I->see('Review has been updated successfully.', "//span[normalize-space()='Review has been updated successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        
        //....Quotes..........
        $I->scrollTo("//h1[normalize-space()='Softoinic']");
        $I->wait(2);
        $I->click("//a[@id='quotes-tab']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Request Quote']");
        $I->wait(2);
        $I->seeInCurrentUrl('/request-quote');
        $I->see('Request a Quote', "//h2[normalize-space()='Request a Quote']");
        $I->wait(2);
        $I->amOnPage('/services-details/1');
        $I->wait(15);
        
        
        //.......Invoice..........
        $I->click("//a[@id='invoices-tab']");
        $I->wait(2);
        
        //.....Request A Call Back.........
        $I->click("//button[normalize-space()='request a call back']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Type your first name']","Sukirti");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type your last name']","Belaura");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type company name']","Company Name");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type phone number']","+91-7634012857");
        $I->wait(1);
        $I->fillField("//input[@placeholder='Type your email']","random@email.com");
        $I->wait(1);
        $I->click("//div[@class='modal-body-wrap']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(2);
        $I->click("//div[@aria-label='Choose Thursday, June 10th, 2021']");
        $I->wait(2);
        $I->click("//div[@class='modal-body']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(2);
        $I->click("//li[normalize-space()='7:00 PM']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Request']");
        $I->wait(2);
        $I->see('A member of our team will get in touch with you shortly.', "//p[contains(text(),'A member of our team will get in touch with you sh')]");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(5);
        
        

        
        
        
        


    }
}
