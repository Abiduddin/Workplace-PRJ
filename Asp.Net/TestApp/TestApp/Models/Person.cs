using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace TestApp.Models
{
    public class Person
    {
        public int ID { get; set; }
        [Required]
        [StringLength(200)]
        public string Name { get; set; }
        public int Age { get; set; }

    }
}