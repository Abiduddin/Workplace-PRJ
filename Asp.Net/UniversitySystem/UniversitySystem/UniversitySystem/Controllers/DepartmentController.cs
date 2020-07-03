using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Web;
using System.Web.Mvc;
using UniversitySystem.Models;

namespace UniversitySystem.Controllers
{
    public class DepartmentController : Controller
    {
        private readonly ApplicationDbContext _context;

        public DepartmentController()
        {
            _context = new ApplicationDbContext();
        }

        protected override void Dispose(bool dispose)
        {
            _context.Dispose();
        }

        public ActionResult Index()
        {
            //var departments = _context.Departments.ToList();  //No need to use _context to contact database as the department list is fetched through "/api/departments" in view

            return View();
        }

        [HttpGet]
        public ActionResult Save()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Save(Department department)
        {
           var departments = _context.Departments.Any(d => d.DepartmentCode == department.DepartmentCode);

            if (departments)
                return Content("Exists");

            _context.Departments.Add(department);
            _context.SaveChanges();

            return Content("Controller");
        }

        public string DepartmentCheck(string deptName)
        {
            var deptStatus = _context.Departments.FirstOrDefault(d => d.DepartmentName == deptName);

            if (deptName != null)
                return "1";

            return "0";
        }
    }
}