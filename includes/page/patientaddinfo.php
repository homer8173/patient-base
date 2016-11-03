<div class="row">
    <h1> Ajouter un rapport <small>sur le <?= $traumatism ?> de <?= $patient ?></small></h1>
    <form role="form">
        
        
    <div data-role="rangeslider">
        <label for="range-1a">Rangeslider:</label>
        <input type="range" name="range-1a" id="range-1a" min="0" max="100" value="40">
        <label for="range-1b">Rangeslider:</label>
        <input type="range" name="range-1b" id="range-1b" min="0" max="100" value="80">
    </div>
        
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>