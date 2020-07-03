namespace TestApp.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class PersonAnnot : DbMigration
    {
        public override void Up()
        {
            AlterColumn("dbo.People", "Name", c => c.String(nullable: false, maxLength: 200));
        }
        
        public override void Down()
        {
            AlterColumn("dbo.People", "Name", c => c.String());
        }
    }
}
