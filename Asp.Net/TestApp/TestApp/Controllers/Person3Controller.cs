using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;

namespace TestApp.Controllers
{
    public class Person3Controller : ApiController
    {
        // GET: api/Person3
        public IEnumerable<string> Get()
        {
            return new string[] { "value1", "value2" };
        }

        // GET: api/Person3/5
        public string Get(int id)
        {
            return "value";
        }

        // POST: api/Person3
        public void Post([FromBody]string value)
        {
        }

        // PUT: api/Person3/5
        public void Put(int id, [FromBody]string value)
        {
        }

        // DELETE: api/Person3/5
        public void Delete(int id)
        {
        }
    }
}
