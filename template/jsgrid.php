    <h1>Data Manipulation</h1>
    <div id="jsGrid"></div>

    <div id="detailsDialog">
        <form id="detailsForm">
            <div class="details-form-field">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" />
            </div>
            <div class="details-form-field">
                <label for="age">Age:</label>
                <input id="age" name="age" type="number" />
            </div>
            <div class="details-form-field">
                <label for="address">Address:</label>
                <input id="address" name="address" type="text" />
            </div>
            <div class="details-form-field">
                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="">(Select)</option>
                    <option value="1">United States</option>
                    <option value="2">Canada</option>
                    <option value="3">United Kingdom</option>
                    <option value="4">France</option>
                    <option value="5">Brazil</option>
                    <option value="6">China</option>
                    <option value="7">Russia</option>
                </select>
            </div>
            <div class="details-form-field">
                <label for="married">Is Married</label>
                <input id="married" name="married" type="checkbox" />
            </div>
            <div class="details-form-field">
                <button type="submit" id="save">Save</button>
            </div>
        </form>
    </div>

    <script>
        $(function() {

            $("#jsGrid").jsGrid({
                height: "70%",
                width: "100%",
                editing: true,
                autoload: true,
                paging: true,
                deleteConfirm: function(item) {
                    return "The client \"" + item.Name + "\" will be removed. Are you sure?";
                },
                rowClick: function(args) {
                    showDetailsDialog("Edit", args.item);
                },
                controller: db,
                fields: [
                    { name: "Name", type: "text", width: 150 },
                    { name: "Age", type: "number", width: 50 },
                    { name: "Address", type: "text", width: 200 },
                    { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                    { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                    {
                        type: "control",
                        modeSwitchButton: false,
                        editButton: false,
                        headerTemplate: function() {
                            return $("<button>").attr("type", "button").text("Add")
                                .on("click", function () {
                                    showDetailsDialog("Add", {});
                                });
                        }
                    }
                ]
            });

            $("#detailsDialog").dialog({
                autoOpen: false,
                width: 400,
                close: function() {
                    $("#detailsForm").validate().resetForm();
                    $("#detailsForm").find(".error").removeClass("error");
                }
            });

            $("#detailsForm").validate({
                rules: {
                    name: "required",
                    age: { required: true, range: [18, 150] },
                    address: { required: true, minlength: 10 },
                    country: "required"
                },
                messages: {
                    name: "Please enter name",
                    age: "Please enter valid age",
                    address: "Please enter address (more than 10 chars)",
                    country: "Please select country"
                },
                submitHandler: function() {
                    formSubmitHandler();
                }
            });

            var formSubmitHandler = $.noop;

            var showDetailsDialog = function(dialogType, client) {
                $("#name").val(client.Name);
                $("#age").val(client.Age);
                $("#address").val(client.Address);
                $("#country").val(client.Country);
                $("#married").prop("checked", client.Married);

                formSubmitHandler = function() {
                    saveClient(client, dialogType === "Add");
                };

                $("#detailsDialog").dialog("option", "title", dialogType + " Client")
                    .dialog("open");
            };

            var saveClient = function(client, isNew) {
                $.extend(client, {
                    Name: $("#name").val(),
                    Age: parseInt($("#age").val(), 10),
                    Address: $("#address").val(),
                    Country: parseInt($("#country").val(), 10),
                    Married: $("#married").is(":checked")
                });

                $("#jsGrid").jsGrid(isNew ? "insertItem" : "updateItem", client);

                $("#detailsDialog").dialog("close");
            };

        });
    </script>
