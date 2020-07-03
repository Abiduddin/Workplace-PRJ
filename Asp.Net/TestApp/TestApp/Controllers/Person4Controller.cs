using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Http.ModelBinding;
using System.Web.Http.OData;
using System.Web.Http.OData.Routing;
using TestApp.Models;
using TestApp.Models.Context;

namespace TestApp.Controllers
{
    /*
    The WebApiConfig class may require additional changes to add a route for this controller. Merge these statements into the Register method of the WebApiConfig class as applicable. Note that OData URLs are case sensitive.

    using System.Web.Http.OData.Builder;
    using System.Web.Http.OData.Extensions;
    using TestApp.Models;
    ODataConventionModelBuilder builder = new ODataConventionModelBuilder();
    builder.EntitySet<Person>("Person4");
    config.Routes.MapODataServiceRoute("odata", "odata", builder.GetEdmModel());
    */
    public class Person4Controller : ODataController
    {
        private ProjectDbContext db = new ProjectDbContext();

        // GET: odata/Person4
        [EnableQuery]
        public IQueryable<Person> GetPerson4()
        {
            return db.Person;
        }

        // GET: odata/Person4(5)
        [EnableQuery]
        public SingleResult<Person> GetPerson([FromODataUri] int key)
        {
            return SingleResult.Create(db.Person.Where(person => person.ID == key));
        }

        // PUT: odata/Person4(5)
        public IHttpActionResult Put([FromODataUri] int key, Delta<Person> patch)
        {
            Validate(patch.GetEntity());

            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            Person person = db.Person.Find(key);
            if (person == null)
            {
                return NotFound();
            }

            patch.Put(person);

            try
            {
                db.SaveChanges();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!PersonExists(key))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return Updated(person);
        }

        // POST: odata/Person4
        public IHttpActionResult Post(Person person)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            db.Person.Add(person);
            db.SaveChanges();

            return Created(person);
        }

        // PATCH: odata/Person4(5)
        [AcceptVerbs("PATCH", "MERGE")]
        public IHttpActionResult Patch([FromODataUri] int key, Delta<Person> patch)
        {
            Validate(patch.GetEntity());

            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            Person person = db.Person.Find(key);
            if (person == null)
            {
                return NotFound();
            }

            patch.Patch(person);

            try
            {
                db.SaveChanges();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!PersonExists(key))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return Updated(person);
        }

        // DELETE: odata/Person4(5)
        public IHttpActionResult Delete([FromODataUri] int key)
        {
            Person person = db.Person.Find(key);
            if (person == null)
            {
                return NotFound();
            }

            db.Person.Remove(person);
            db.SaveChanges();

            return StatusCode(HttpStatusCode.NoContent);
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }

        private bool PersonExists(int key)
        {
            return db.Person.Count(e => e.ID == key) > 0;
        }
    }
}
