<?php 

class Task1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
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
        $I->wait(30);
        //Page after login
       
        $I->seeInCurrentUrl('/daily-task');
        $I->wait(1);
        


        //...................Creation of task............................

        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//span[@class='he-box']");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[9]//a[1]");
        $I->wait(1);
        $I->click("//span[@class='he-box']");
        $I->wait(1);
        $I->click("//div[@class='col']//button[@type='button']");
        $I->wait(2);
        $I->see("All daily tasks saved.", "//p[normalize-space()='All daily tasks saved.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
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

        //Task 1 created


        //...................Creating Empty Task..................
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//td[@class='ui-resizable']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write title']",'Task (Without Date & Time)');
        $I->wait(2);
        $I->click("//div[@class='text-left modal-footer']//button[1]");
        $I->wait(2);
        $I->see("Your new task has been created successfully.", "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);


        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//td[@class='ui-resizable']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write title']",'Task (Without Date & Time)');
        $I->wait(2);
        $I->click("//div[@class='text-left modal-footer']//button[1]");
        $I->wait(2);
        $I->see("Your new task has been created successfully.", "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");

        
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//td[@class='ui-resizable']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write title']",'Task (Without Date & Time)');
        $I->wait(2);
        $I->click("//div[@class='text-left modal-footer']//button[1]");
        $I->wait(2);
        $I->see("Your new task has been created successfully.", "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        
        
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(1);
        $I->click("//td[@class='ui-resizable']//span[@class='he-add'][normalize-space()='+ Add']");
        $I->wait(2);
        $I->fillField("//input[@placeholder='Write title']",'Task (Without Date & Time)');
        $I->wait(2);
        $I->click("//div[@class='text-left modal-footer']//button[1]");
        $I->wait(2);
        $I->see("Your new task has been created successfully.", "//p[normalize-space()='Your new task has been created successfully.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        $I->click("//div[@class='col']//button[@type='button']");
        $I->wait(2);
        $I->see("All daily tasks saved.", "//p[normalize-space()='All daily tasks saved.']");
        $I->wait(2);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(2);
        
        // ...................Indentation of Task...............
        $I->click("//tbody/tr[5]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[4]//a[1]");
        $I->wait(1);
        $I->click("//tbody/tr[4]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[4]");
        $I->wait(1);
        $I->click("//tbody/tr[3]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[4]");
        $I->wait(1);
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[4]");
        $I->wait(1);
        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[4]");
        $I->wait(2);

        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]");
        $I->wait(1);
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]");
        $I->wait(1);
        $I->click("//tbody/tr[3]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]");
        $I->wait(1);
        $I->click("//tbody/tr[4]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]");
        $I->wait(1);
        $I->click("//tbody/tr[5]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//li[5]//a[1]");
        $I->wait(2);
        
        // ...............Move Up and Move Down..................
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->click("//tbody/tr[5]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//ul[1]//li[2]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//ul[1]//li[2]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//ul[1]//li[2]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-task-toolbar-wrap']//ul[1]//li[2]//a[1]");
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/ul[@class='list-unstyled he-task-toolbar-list']/li[3]/a[1]");
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/ul[@class='list-unstyled he-task-toolbar-list']/li[3]/a[1]");
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/ul[@class='list-unstyled he-task-toolbar-list']/li[3]/a[1]");
        $I->wait(1);
        $I->click("//body/div[@id='root']/div[@class='main-wrap']/section[@class='he-content-wrap']/div[@class='he-body-content']/div[@class='he-task-toolbar-wrap']/ul[@class='list-unstyled he-task-toolbar-list']/li[3]/a[1]");
        $I->wait(1);
        
        //....................Clear a Task.........................
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->click("//tbody/tr[1]/td[1]/label[1]/span[1]");
        $I->click("//div[@class='he-body-content']//li[8]//a[1]");
        
        
        //........................Redo & Undo Features..........................
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(2);
        // Enter Date and Time 
        $I->click("//tbody/tr[2]/td[4]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Saturday, May 1st, 2021']");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[2]//div[1]//div[1]//span[1]");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Sunday, May 30th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='he-modal-body modal-body']//div[2]//div[1]//div[1]//div[1]//div[1]//span[1]");
        $I->wait(1);
        $I->click("//li[normalize-space()='12:00 PM']");
        $I->wait(1);
        $I->click("//div[@class='he-modal-body modal-body']//div[2]//div[1]//div[2]//div[1]//div[1]//span[1]");
        $I->wait(1);
        $I->click("//li[normalize-space()='8:00 PM']");
        $I->wait(1);
        $I->click("//button[@aria-label='Close']//img[@alt='close']");
        // Tik on Completed Check box
        $I->wait(1);
        $I->click("//tbody/tr[1]/td[6]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[2]/td[6]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//tbody/tr[3]/td[6]/label[1]/span[1]");
        $I->wait(1);
        // Undo
        $I->click("//tbody/tr[2]/td[1]/label[1]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[6]//a[1]");
        $I->wait(1);
        // Redo
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);
        $I->click("//div[@class='he-body-content']//li[7]//a[1]");
        $I->wait(1);


        
        //....................Delete Task...................        
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(2);
        $I->click("//span[@class='he-box']");
        $I->wait(2);
        $I->click("//div[@class='he-body-content']//li[9]//a[1]");
        $I->wait(2);

        // .....................Add Row..............................
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(2);
        $I->click("//a[@class='he-task-toolbar-item add-new-task-row']");
        $I->wait(2);
        $I->reloadPage();
        $I->wait(60);
        $I->see('Daily Task Management', "//h2[normalize-space()='Daily Task Management']");
        $I->wait(5);
        
        // ..................................Date Filteration........................
        $I->wait(1);
        $I->scrollTo("//div[@class='col']");
        $I->wait(1);
        $I->click("//tbody/tr[3]/td[4]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Friday, October 1st, 2021']");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[2]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Next Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Saturday, October 30th, 2021']");
        $I->wait(1);
        $I->click("//div[@id='taskCalendar']//button[@aria-label='Close']");
        $I->wait(1);
        $I->click("//tbody/tr[4]/td[4]/span[1]");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[1]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Friday, January 15th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='modal-content']//div[1]//div[1]//div[2]//div[1]//div[1]//span[1]//img[1]");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Previous Month']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, February 25th, 2021']");
        $I->wait(1);
        $I->click("//button[@aria-label='Close']//img[@alt='close']");
        $I->wait(1);
        $I->click("//div[@class='col']//button[@type='button']");
        $I->wait(2);
        $I->see('All daily tasks saved.', "//p[normalize-space()='All daily tasks saved.']");
        $I->wait(1);
        $I->click("//button[normalize-space()='Done']");
        $I->wait(1);
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap']//img[@alt='Calendar']");
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, May 20th, 2021']");
        $I->wait(1);
        $I->click("//div[@class='input-group-append date form_date he-datetime-wrap ml-2']//img[@alt='Calendar']");
        $I->wait(3);
        $I->wait(1);
        $I->click("//div[@aria-label='Choose Thursday, September 16th, 2021']");
        $I->wait(2);
        $I->dontSee("//tbody/tr[3]/td[1]/label[1]/span[1]");
        $I->wait(2);
        $I->dontSee("//tbody/tr[3]/td[1]/label[1]/span[1]");
        $I->wait(2);
        
        //...................Print Section...................
        $I->click("//div[@class='he-body-content']//ul[2]//li[2]//a[1]//*[local-name()='svg']");
        $I->wait(2);
    }
}
