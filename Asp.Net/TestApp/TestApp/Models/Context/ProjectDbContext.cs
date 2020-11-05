using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;


namespace TestApp.Models.Context
{
    public class ProjectDbContext:DbContext
    {
        public DbSet<Person> Person { get; set; }
        public DbSet<Family> Families { get; set; }

        public DbSet<Car> Cars { get; set; }
    }
}