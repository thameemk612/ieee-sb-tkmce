<br><br><br>
<section class="mt-5 mb-5">
    <div class="container">

        <input type="text" class="form-control" id="plc" onkeyup="filterBybatch()" placeholder="Filter By Batch.." title="Type the batch">

         <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
        </div>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-hover table-striped " id="registerId">
            <thead>
                <tr>
                    <th>SL NO</th>
                    <th>NAME</th>
                    <th>YEAR & BATCH</th>
                    <th>College</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>IEEE Member</th>
                    <th>IEEE IAS Member</th>
                    <th>Laptop</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candid as $row) { ?>
                <tr>
                    <td>
                        <?=$row['id']?>
                    </td>
                    <td>
                        <?=$row['name']?>
                    </td>
                    <td>
                    <?=$row['year']?>&nbsp;<?=$row['batch']?>
                    </td>
                    <td>
                        <?=$row['college']?>
                    </td>
                    <td><a href="mailto:<?=$row['email']?>">
                            <?=$row['email']?></a></td>
                    <td><a href="tel:<?=$row['phone']?>">
                            <?=$row['phone']?></a></td>
                    <td> <?=$row['ieee-member']?></td>
                    <td> <?=$row['ias-member']?></td>
                    <td> <?=$row['laptop']?></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</section>
<script>

function filterBybatch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("plc");
  filter = input.value.toUpperCase();
  table = document.getElementById("registerId");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
