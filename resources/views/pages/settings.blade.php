<h1>I am settings page</h1>
<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all"></th> <!-- Select All -->
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>Tony Stark</td>
            <td>Engineer</td>
            <td>New York</td>
            <td>45</td>
            <td>2012/05/14</td>
            <td>$500,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>Steve Rogers</td>
            <td>Manager</td>
            <td>Brooklyn</td>
            <td>101</td>
            <td>1943/07/04</td>
            <td>$250,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>Natasha Romanoff</td>
            <td>Agent</td>
            <td>Moscow</td>
            <td>35</td>
            <td>2010/09/01</td>
            <td>$150,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>Bruce Banner</td>
            <td>Scientist</td>
            <td>Ohio</td>
            <td>49</td>
            <td>2008/06/13</td>
            <td>$300,000</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="row-checkbox"></td>
            <td>Thor Odinson</td>
            <td>God of Thunder</td>
            <td>Asgard</td>
            <td>1500</td>
            <td>Unknown</td>
            <td>$999,999</td>
        </tr>
    </tbody>
</table>

<script>
    var table;
    var title = "{{ $title }}";
    document.title = title + " - {{ env('APP_NAME') }}";

    // Optional: auto-init a table
    $(document).ready(function() {
        console.log(location.pathname);
        const table = $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            columnDefs: [{
                    orderable: false,
                    targets: 0
                } // Disable sorting on checkbox column
            ],
            order: [
                [1, 'asc']
            ], // Optional default sort
        });

        // Handle "select all" checkbox
        $('#select-all').on('click', function() {
            const isChecked = this.checked;
            $('.row-checkbox').each(function() {
                this.checked = isChecked;
            });
        });

        // Optional: get all selected rows on button click
        $('#your-custom-button').on('click', function() {
            const selected = [];
            $('.row-checkbox:checked').each(function() {
                const row = $(this).closest('tr');
                const rowData = table.row(row).data();
                selected.push(rowData);
            });
            console.log(selected);
        });

         // Optional: get all selected rows on button click
        $('.row-checkbox').on('change', function() {
            const selected = [];
            $('.row-checkbox:checked').each(function() {
                const row = $(this).closest('tr');
                const rowData = table.row(row).data();
                selected.push(rowData);
            });
            console.log(selected);
        });
    });
</script>
