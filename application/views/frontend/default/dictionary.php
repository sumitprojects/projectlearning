<style>
div.alphabet {
    position: relative;
    display: table;
    width: 100%;
    margin-bottom: 1em;
}

div.alphabet span {
    display: table-cell;
    color: #3174c7;
    cursor: pointer;
    text-align: center;
    width: 3.5%
}

div.alphabet span:hover {
    text-decoration: underline;
}

div.alphabet span.active {
    color: black;
}

div.alphabet span.empty {
    color: red;
}

div.alphabetInfo {
    display: block;
    position: absolute;
    background-color: #111;
    border-radius: 3px;
    color: white;
    top: 2em;
    height: 1.8em;
    padding-top: 0.4em;
    text-align: center;
    z-index: 1;
}
</style>

<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col" style="padding: 35px;">
                <table id="front-dict" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Phrase</th>
                            <th>Meaning</th>
                            <th>Pronounce</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($phrase_list as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['phrase']; ?></td>
                            <td><?php echo $value['meaning']; ?></td>
                            <td><?php echo $value['pronounce']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Phrase</th>
                            <th>Meaning</th>
                            <th>Pronounce</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>