using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace UniversitySystem.Models
{
    public class Department
    {
        public int Id { get; set; }

        [Required(ErrorMessage = "Provide dept code", AllowEmptyStrings = false)]
        [StringLength(255)]
        public string DepartmentCode { get; set; }

        [Required(ErrorMessage = "provide dept name", AllowEmptyStrings = false)]
        [StringLength(255)]
        public string DepartmentName { get; set; }
    }
}