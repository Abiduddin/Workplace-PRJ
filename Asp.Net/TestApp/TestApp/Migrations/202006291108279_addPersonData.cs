namespace TestApp.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class addPersonData : DbMigration
    {
        public override void Up()
        {
            Sql("INSERT INTO People (Name, Age) Values ('kapali',12)");
            Sql("INSERT INTO People (Name, Age) Values ('Chapali',42)");
            Sql("INSERT INTO People (Name, Age) Values ('pppapali',52)");
        }
        
        public override void Down()
        {
        }
    }
}
