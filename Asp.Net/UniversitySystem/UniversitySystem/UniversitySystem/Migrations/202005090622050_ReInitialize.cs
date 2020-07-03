namespace UniversitySystem.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class ReInitialize : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "dbo.Departments",
                c => new
                    {
                        Id = c.Int(nullable: false, identity: true),
                        DepartmentCode = c.String(nullable: false, maxLength: 255),
                        DepartmentName = c.String(nullable: false, maxLength: 255),
                    })
                .PrimaryKey(t => t.Id);
            
        }
        
        public override void Down()
        {
            DropTable("dbo.Departments");
        }
    }
}
