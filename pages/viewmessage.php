<?php
require_once '../vendor/autoload.php';

if (!isset($_SESSION['userID'])) {
    header('location: Login.php');
    exit();
}

$contactObj = new \App\Contact();

$contactObj->pdelete(); 
$contactObj->pupdate();

$allMessages = $contactObj->pread();

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap'>
        <title>View Messages</title>
        <link rel="stylesheet" href="css1.css"> 
      <style>
    #contact {
        width: 100%;
        max-width: 900px; 
        margin: 50px auto;
        background: #fff; 
        padding: 20px;
        border: 2px solid #000;
        box-shadow: 10px 10px 0px #ffa500; 
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: #fff;
    }

    th {
        background-color: #f2f2f2;
        color: #000;
        font-weight: bold;
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
        color: #333;
        word-break: break-word; 
    }

    .del-btn {
        background: #ffa500;
        color: #fff;
        padding: 8px 15px;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        display: inline-block;
    }

    .del-btn:hover {
        background: #000;
        color: #fff;
    }

    h2 {
        background: #ffa500;
        color: #000;
        padding: 10px;
        margin: -20px -20px 20px -20px; 
    }
    .upd-btn {
    background: #4CAF50; 
    color: #fff;
    padding: 8px 15px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    display: inline-block;
    margin-right: 5px;
}
.upd-btn:hover {
    background: #45a049;
}
</style>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="logo.png" width="180px" alt="logo">
            </div>
        </header>
        
        <?php require_once('./layout/navbar.php'); ?>

        <div id="contact" style="height: auto; padding: 100px 100;">
            <div style="text-align: center; color: white;">
                <h2 style="background-color: orange;color:Black;">RECEIVED MESSAGES</h2>
                <p>Manage your contact resource (Read & Delete)</p>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($allMessages && $allMessages->num_rows > 0): ?>
                        <?php while($row = $allMessages->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['cname'] ; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['cmessage']; ?></td>
<td>
    <a href="viewmessage.php?msgToUpdate=<?php echo $row['cid']; ?>" 
       class="upd-btn">Done</a>

    <a href="viewmessage.php?msgToDelete=<?php echo $row['cid']; ?>" 
       class="del-btn" 
       onclick="return confirm('Delete this message?')">Delete</a>
</td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="4" style="text-align:center;">No messages found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php require_once('./layout/footer.php'); ?>
    </body>
</html>