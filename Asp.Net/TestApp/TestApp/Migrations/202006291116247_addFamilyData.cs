namespace TestApp.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class addFamilyData : DbMigration
    {
        public override void Up()
        {
            Sql("INSERT INTO Families (Members) Values (3)");
            Sql("INSERT INTO Families (Members) Values (5)");
            Sql("INSERT INTO Families (Members) Values (2)");
        }
        
        public override void Down()
        {
        }
    }
}
