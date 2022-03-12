const sideNav = document.getElementById("sideNav");
const jsContent = document.getElementById("jsContent");
// bradcams
const pageTitle = document.getElementById("pageTitle");
const previousPageLink = document.getElementById("previousPageLink");
const currentPage = document.getElementById("currentPage");

const allProduct = document.getElementById("allProduct");
const addProduct = document.getElementById("addProduct");
const allCat = document.getElementById("allCat");
const newCat = document.getElementById("newCat");
const mainMenu = document.querySelectorAll(".mainMenu");
const chieldMenu = document.querySelectorAll(".chieldMenu");

previousPageLink.addEventListener("click", () => {
  history.back();
});

const changeActiveClass = (menuType) => {
  menuType.forEach((item) => {
    item.addEventListener("click", (e) => {
      removeClass(menuType);
      e.target.classList.add("active");
    });
  });
};

const removeClass = (menuType) => {
  menuType.forEach((item) => {
    item.classList.remove("active");
  });
};

changeActiveClass(mainMenu);
changeActiveClass(chieldMenu);

allProduct.addEventListener("click", () => {
  pageTitle.textContent = "All Products";
  currentPage.textContent = "All Products";
  jsContent.innerHTML = ``;
  getData();
});

addProduct.addEventListener("click", () => {
  pageTitle.textContent = "Add New Product";
  currentPage.textContent = "Add New Product";
  jsContent.innerHTML = ``;
  jsContent.appendChild(addProductForm());
});

allCat.addEventListener("click", () => {
  pageTitle.textContent = "All Category";
  currentPage.textContent = "All Category";
  jsContent.innerHTML = ``;
  getCatData(jsContent);
});

newCat.addEventListener("click", () => {
  pageTitle.textContent = "Add New Category";
  currentPage.textContent = "Add New Category";
  jsContent.innerHTML = ``;
  jsContent.appendChild(addCatForm());
});

const getCatData = async (e) => {
  const fetchData = await fetch("./admindb.php?allcats=1");
  const jsonData = await fetchData.json();
  const table = document.createElement("table");
  table.className = "table table-dark table-striped table-hover";
  table.innerHTML = `
    <tr>
      <th>S.N.</th>
      <th>Category Icon</th>
      <th>Category Name</th>
      <th>Action</th>
    </tr>
  `;
  let x = 1;
  jsonData.forEach((data) => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${x}</td>
      <td><i class="${data.icon}"></i></td>
      <td>${data.name}</td>
      <td>
        <a href="" class="btn btn-sm btn-warning">Edit</a>
        <a href="" class="btn btn-sm btn-danger">Delete</a>
      </td>
    `;
    ++x;
    table.appendChild(tr);
  });
  e.appendChild(table);
};

const addProductForm = () => {
  const formDiv = document.createElement("div");
  formDiv.classList = "col-md-8";
  formDiv.innerHTML = `
    <form id="addProductFormId">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Title" id="addTitle" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Stock" id="addStock" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Short Descriptoin" id="addShortDescriptoin" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Regular Price" id="addRegularPrice" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Offer Price" id="addOfferPrice" />
      </div>
      <div class="form-group">
        <textarea placeholder="Description" id="addDescription" class="form-control"></textarea>
      </div>
      <div class="form-group">
      <label>Featured Image</label>
        <input type="file" class="" id="addFeaturedImage" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Product Brand" id="addBrand" />
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-dark" value="Add Product" />
      </div>
    </form>
  `;
  return formDiv;
};

const addCatForm = () => {
  const formDiv = document.createElement("div");
  formDiv.classList = "col-md-8";
  formDiv.innerHTML = `
  <div id="addCatErrSucMsg"></div>
    <form onsubmit="return false">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Category Name" id="addCat" />
        <span class="text-danger d-block" id="errCat"></span>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Category Icon" id="addCatIcon" />
        <span class="text-danger d-block" id="errIcon"></span>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-dark" value="Add Category" onclick="addCatFunc()" />
      </div>
    </form>  
  `;
  return formDiv;
};

const changePageNumber = (j) => {
  let pn = j + 1;
  jsContent.innerHTML = ``;
  getData(pn);
};

const addCatFunc = () => {
  const addCat = document.getElementById("addCat").value;
  const addCatIcon = document.getElementById("addCatIcon").value;
  const errCat = document.getElementById("errCat");
  const errIcon = document.getElementById("errIcon");
  if (!addCat) {
    errCat.textContent = "Please write a category name";
  }
  if (!addCatIcon) {
    errIcon.textContent = "Please provide a icon class";
  }
  if (addCat && addCatIcon) {
    const checkAddCat = jQAddcat(addCat, addCatIcon);
    if (checkAddCat === false) {
      const errMsg = `<div class='alert alert-danger'>Something went wrong</div>`;
      document.getElementById("addCatErrSucMsg").innerHTML = errMsg;
    } else {
      const successMsg = `<div class='alert alert-success'>Category added successfully</div>`;
      document.getElementById("addCatErrSucMsg").innerHTML = successMsg;
    }
  }
};

const getData = async (pageNo = 1) => {
  const fetchData = await fetch("./admindb.php?allProducts=1");
  const jsonData = await fetchData.json();

  const cardData = (e) => {
    const card = document.createElement("div");
    card.className = "card col-md-4";
    card.setAttribute("data-id", `${e.id}`);
    const cardHeader = document.createElement("div");
    cardHeader.className = "card-header";
    cardHeader.textContent = e.title;
    const cardBody = document.createElement("div");
    cardBody.className = "card-body";
    cardBody.textContent = e.short_descriptoin;
    const cardFooter = document.createElement("div");
    cardFooter.className = "card-footer";
    cardFooter.textContent = "brand: " + e.brand;
    card.appendChild(cardHeader);
    card.appendChild(cardBody);
    card.appendChild(cardFooter);
    jsContent.appendChild(card);
  };
  const totalResult = jsonData.length;
  const resultPerPage = 3;
  const totalPage = Math.ceil(totalResult / resultPerPage);
  const locadData = (pn = pageNo) => {
    let pageNo = pn;
    let startPoint = (pageNo - 1) * resultPerPage;
    for (let i = startPoint; i < totalResult; i++) {
      if (i < startPoint + resultPerPage) {
        cardData(jsonData[i]);
        continue;
      }
    }
  };
  locadData();
  const row = document.createElement("div");
  row.className = "row w-100";
  for (let j = 0; j < totalPage; j++) {
    const button = document.createElement("button");
    button.className = "btn btn-dark mx-1";
    button.textContent = j + 1;
    button.setAttribute("onclick", `changePageNumber(${j})`);
    console.log(j);
    row.appendChild(button);
  }
  jsContent.appendChild(row);
};
