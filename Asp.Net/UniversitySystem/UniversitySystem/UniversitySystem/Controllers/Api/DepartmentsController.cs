using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Mvc;
using UniversitySystem.Models;

namespace UniversitySystem.Controllers.Api
{
    public class DepartmentsController : ApiController
    {
        private ApplicationDbContext _context;

        public DepartmentsController()
        {
            _context = new ApplicationDbContext();
        }

        //GET /api/departments
        [System.Web.Http.HttpGet]
        public IEnumerable<Department> GetDepartments()
        {
            return _context.Departments.ToList();
        }

        [System.Web.Http.HttpPost]
        public string CreateDepartment(Department department)
        {
            if (!ModelState.IsValid)
                return "Not valid";

            _context.Departments.Add(department);
            _context.SaveChanges();

            return "Ok";
        }
    }
}
