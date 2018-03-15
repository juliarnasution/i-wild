@include('template.header')
@include('template.menubar')
<body>
    <div class="container">
      <div class="col-10">
        <div class="row">
        <!-- <div class="card"> -->
          <h2>Example body text</h2>
            <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <p><small>This line of text is meant to be treated as fine print.</small></p>
            <p>The following is <strong>rendered as bold text</strong>.</p>
            <p>The following is <em>rendered as italicized text</em>.</p>
            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
        <!-- </div> -->
        </div>

        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Type</th>
                <th scope="col">Column heading</th>
                <th scope="col">Column heading</th>
                <th scope="col">Column heading</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr>
                <th scope="row">Default</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-primary">
                <th scope="row">Primary</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">Secondary</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-success">
                <th scope="row">Success</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-danger">
                <th scope="row">Danger</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-warning">
                <th scope="row">Warning</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-info">
                <th scope="row">Info</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-light">
                <th scope="row">Light</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="table-dark">
                <th scope="row">Dark</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
@include('template.footer')
