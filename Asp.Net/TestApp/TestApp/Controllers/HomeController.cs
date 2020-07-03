using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Mvc.Razor;
using TestApp.Models;
using TestApp.Models.Context;

namespace TestApp.Controllers
{
    public class HomeController : Controller
    {

        //GET : Home/Index
//        public ActionResult Index()
//        {
//            return View();
//        }


        private ProjectDbContext _context;

        public HomeController()
        {
            _context = new ProjectDbContext();
        }

        protected override void Dispose(bool disposing)
        {
            _context.Dispose();
        }

        

        public ActionResult Index(int? pageIndex, string sortBy)
        {
            if (!pageIndex.HasValue)
                pageIndex = 1;

            if (String.IsNullOrWhiteSpace(sortBy))
                sortBy = "Name";

            return Content(String.Format("Page Index {0} & sortBy {1} ",pageIndex, sortBy));
        }


        public ActionResult About(int? Id)
        {
            ViewBag.Message = "Your application description page.";

            var person = _context.Person.SingleOrDefault(c => c.ID == Id);
            if (person == null)
            {
                person = new Person(){Name = "kk",Age = 1};
            }

            return View(person);
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        public ActionResult Developer()
        {
            List<Person> aPerson = _context.Person.ToList();

            return View(aPerson);
        }

        public ActionResult Edit(int? Id)
        {

            return Content("Id = "+Id);
        }

        [Route("Home/Birth/{year}/{month:regex(\\d{2}):range(1,12)}")]

        public ActionResult Birth(int? year, int? month)
        {

            return Content(String.Format("Year: {0} Month: {1}", year, month));
        }



        
    }
}