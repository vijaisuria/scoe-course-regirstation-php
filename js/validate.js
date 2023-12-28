const maritalStatusSelect = document.getElementById("martial_status");
        const otherMaritalStatusDiv = document.getElementById("otherMaritalStatus");
        const otherMaritalStatusInput = document.getElementById("otherMaritalStatusInput");
        const addMaritalStatusButton = document.getElementById("addMaritalStatus");
        maritalStatusSelect.addEventListener("change", function() {
          if (this.value === "others") {
            otherMaritalStatusDiv.style.display = "block";
          } else {
            otherMaritalStatusDiv.style.display = "none";
          }
        });
        addMaritalStatusButton.addEventListener("click", function() {
          const otherOption = otherMaritalStatusInput.value;
          if (otherOption) {
            const option = document.createElement("option");
            option.value = otherOption;
            option.text = otherOption;
            maritalStatusSelect.add(option);
            maritalStatusSelect.value = otherOption;
            otherMaritalStatusDiv.style.display = "none";
          }
        });

        const categorySelect = document.getElementById("category");
        const othercategoryDiv = document.getElementById("otherCategoryDiv");
        const othercategoryInput = document.getElementById("otherCategoryInput");
        const addCategoryButton = document.getElementById("addCategory");
        categorySelect.addEventListener("change", function() {
          if (this.value === "others") {
            othercategoryDiv.style.display = "block";
          } else {
            othercategoryDiv.style.display = "none";
          }
        });
        addCategoryButton.addEventListener("click", function() {
          const otherOption1 = othercategoryInput.value;
          if (otherOption1) {
            const option1 = document.createElement("option");
            option1.value = otherOption1;
            option1.text = otherOption1;
            category.add(option1);
            category.value = otherOption1;
            otherCategoryDiv.style.display = "none";
          }
        });

        const genderSelect = document.getElementById("gender");
        const othergenderDiv = document.getElementById("otherGenderDiv");
        const othergenderInput = document.getElementById("otherGenderInput");
        const addGenderButton = document.getElementById("addGender");
        genderSelect.addEventListener("change", function() {
          if (this.value === "others") {
            othergenderDiv.style.display = "block";
          } else {
            othergenderDiv.style.display = "none";
          }
        });
        addGenderButton.addEventListener("click", function() {
          const otherOption2 = othergenderInput.value;
          if (otherOption2) {
            const option2 = document.createElement("option");
            option2.value = otherOption2;
            option2.text = otherOption2;
            gender.add(option2);
            gender.value = otherOption2;
            otherGenderDiv.style.display = "none";
          }
        });

        var phone = document.getElementById('phone_num');
        function checkInput() {
          var value = phone.value;
          if (!value || isNaN(value) || value.length !=10) {
            console.log(value.length);
            phone.style.backgroundImage = "url('https://w7.pngwing.com/pngs/349/105/png-transparent-false-error-missing-absent-x-red-cross-letter-circle-gui.png')";
          } else {
            phone.style.backgroundImage = "url('https://www.pngitem.com/pimgs/m/22-226960_download-success-png-image-green-like-button-png.png')";
          }
        }

        var adhaar_num = document.getElementById('aadhar_num');
        function checkInput1() {
          var value = aadhar_num.value;
          if (!value || isNaN(value) || value.length !=12) {
            console.log(value.length);
            aadhar_num.style.backgroundImage = "url('https://w7.pngwing.com/pngs/349/105/png-transparent-false-error-missing-absent-x-red-cross-letter-circle-gui.png')";
          } else {
            aadhar_num.style.backgroundImage = "url('https://www.pngitem.com/pimgs/m/22-226960_download-success-png-image-green-like-button-png.png')";
          }
        }


