namespace TestApp.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class addFamily : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "dbo.Families",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        Members = c.Int(nullable: false),
                    })
                .PrimaryKey(t => t.Id);
            
        }
        
        public override void Down()
        {
            DropTable("dbo.Families");
        }
    }
}
