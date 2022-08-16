<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Gustavo CSS</title>

        <link rel="stylesheet" href="/dist/style.css" />
        <style>
            :root {
                --font-size: 14px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            
            <?php include("aside.php");?>

            <main>

                <i onclick="document.getElementsByTagName('html')[0].setAttribute('data-theme', 'dark');" class="uil uil-moon"></i>
                <i onclick="document.getElementsByTagName('html')[0].setAttribute('data-theme', '');" class="uil uil-sun"></i>

                <h1>Gustavo CSS</h1>

                <h2>Components</h2>

                <section>

                    <h3>Buttons</h3>

                    <h4 id="buttons">Default buttons</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons.php");?>
                    </div>

                    <h4 id="buttons-form">Form buttons</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-input.php");?>
                    </div>

                    <h4 id="buttons-round">Round buttons</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-round.php");?>
                    </div>

                    <h4 id="buttons-outline">Outline buttons</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-outline.php");?>
                    </div>

                    <h4 id="buttons-sizes">Button sizes</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-sizes.php");?>
                    </div>

                    <h4 id="buttons-icon">Icon buttons</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-icons.php");?>
                    </div>

                    <h4 id="buttons-states">Button states</h4>
                    <div class="codePreview">
                    <?php include("templates/components/buttons/buttons-states.php");?>
                    </div>

                </section>

                <section>

                    <h3>Links</h3>

                    <h4 id="links">Default links</h4>
                    <div class="codePreview">
                    <?php include("templates/components/links/links.php");?>
                    </div>

                    <h4 id="links-icon">Icon links</h4>
                    <div class="codePreview">
                    <?php include("templates/components/links/links-icons.php");?>
                    </div>

                </section>

                <section>

                    <h3>Forms</h3>

                    <h4 id="forms-checkbox">Checkbox</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-checkbox.php");?>
                    </div>

                    <h4 id="forms-checkbox-label">Checkbox with label</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-checkbox-label.php");?>
                    </div>

                    <h4 id="forms-radio">Radiobutton</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-radio.php");?>
                    </div>

                    <h4 id="forms-radio-label">Radiobutton with label</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-radio-label.php");?>
                    </div>
                    
                    <h4 id="forms-switch">Switch</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-switch.php");?>
                    </div>

                </section>

        <details>
      <summary>You can find this information here</summary>
      <p>Long information about the detail.</p>
    </details>
    
    
    <hr/>
    
    <meter value="20" min="0" max="100">20%</meter>
    <progress></progress>
    <progress value="20" min="0" max="100"></progress>

    <span class="g-tooltip" data-content="Dit is een tooltip">
        Tooltip
    </span>
    <style>
        .g-tooltip:before {
            display: none;
            content: attr(data-content);
            background-color: rgba(0,0,0,.75);
            color: #FFF;
            position: absolute;
            width: 10rem;
            left: 50%;
            bottom: 100%;
            border-radius: 4px;
            padding: .5rem;
            font-size: .825rem;
            text-align: center;
            font-weight: 500;
            margin-left: -5rem;
            margin-bottom: .5rem;
        }

        .g-tooltip:hover:before {
            display: block;
        }
    </style>
    
        <section>
            <h3>Dropdown</h3>

            <div class="g-dropdown">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Dropdown <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                        
                    <div class="g-message g-text-center">
                        <div class="g-message__icon">🤯</div>
                        <div class="g-message__title">Nothing here</div>
                        <div class="g-message__content">You didn't add anything yet.</div>
                        <div class="g-message__action"><button class="g-button g-button--primary">Add something</button></div>
                    </div>

                </div>
            </div>

            <div class="g-dropdown">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Dropdown <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item">Dropdown content</div>
                    <div class="g-dropdown__item">Dropdown content</div>
                    <div class="g-dropdown__item">Dropdown content</div>
                </div>
            </div>

            <div class="g-dropdown g-dropdown--bottom-right">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Bottom right <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                </div>
            </div>

            <div class="g-dropdown g-dropdown--top-right">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Top right <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                </div>
            </div>

            <div class="g-dropdown g-dropdown--top-left">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Top left <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                    <div class="g-dropdown__item">Dropdown content comes here</div>
                </div>
            </div>

            <div class="g-dropdown">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Dropdown <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item"><i class="uil uil-cloud-download"></i> Dropdown content</div>
                    <div class="g-dropdown__item"><i class="uil uil-cloud-download"></i> Dropdown content</div>
                    <div class="g-dropdown__item"><i class="uil uil-cloud-download"></i> Dropdown content</div>
                </div>
            </div>

            <div class="g-dropdown">
                <button class="g-dropdown__toggle g-button g-button--icon-after">
                    Dropdown <i class="uil uil-angle-down"></i>
                </button>
                <div class="g-dropdown__content">
                    <div class="g-dropdown__item g-dropdown__item--icon-after">Dropdown content <i class="uil uil-cloud-download"></i></div>
                    <div class="g-dropdown__item g-dropdown__item--icon-after">Dropdown content <i class="uil uil-cloud-download"></i></div>
                    <div class="g-dropdown__item g-dropdown__item--icon-after">Dropdown content <i class="uil uil-cloud-download"></i></div>
                </div>
            </div>

        </section>

        <section>
            <h3>Checkbox</h3>

            <div class="codePreview">
                
                <label>
                    <span class="g-switch">
                        <input type="checkbox">
                        <span class="g-switch__toggle"></span>
                    </span>
                    Turn it off or on?
                </label>

                <label>
                    <span class="g-switch g-switch--error">
                        <input type="checkbox" checked>
                        <span class="g-switch__toggle"></span>
                    </span>
                </label>

                <label>
                    <span class="g-switch g-switch--success">
                        <input type="checkbox" checked>
                        <span class="g-switch__toggle"></span>
                    </span>
                </label>

                <label>
                    <span class="g-switch g-switch--secondary">
                        <input type="checkbox" checked>
                        <span class="g-switch__toggle"></span>
                    </span>
                </label>
            </div>

            <div class="codePreview">
                    <label class="g-checkbox">
                        <input type="checkbox">
                        <span class="g-checkbox__toggle"></span>
                        Turn it off or on?
                    </label>

                    <label class="g-radio">
                        <input type="radio" name="radio" value="option 1" checked>
                        <span class="g-radio__toggle"></span>
                        Turn it off or on?
                    </label>

                    <label class="g-radio">
                        <input type="radio" name="radio" value="option 2">
                        <span class="g-radio__toggle"></span>
                        Turn it off or on?
                    </label>

        </div>


            <?php include("templates/components/forms/forms-input.php");?>

        </section>

        <section>
            <h3>Progress</h3>
            <div class="codePreview">
<progress class="g-progress"></progress>
<progress class="g-progress g-progress--primary" value="10" min="0" max="100">10%</progress>
<progress class="g-progress g-progress--secondary" value="20" min="0" max="100">20%</progress>
<progress class="g-progress g-progress--warning" value="40" min="0" max="100">40%</progress>
<progress class="g-progress g-progress--success" value="60" min="0" max="100">60%</progress>
<progress class="g-progress g-progress--error" value="80" min="0" max="100">80%</progress>
            </div>

            <div class="codePreview">
<progress class="g-progress g-progress--primary g-progress--tiny" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--small" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--default" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--big" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--huge" value="80" min="0" max="100"></progress>
            </div>
        </section>


        <section>

            <h3>Links</h3>

        </section>

        <section>

            <h3>Tags</h3>
            
            <div class="codePreview">
            <?php include("templates/components/tags/tags.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/tags/tags-sizes.php");?>
            </div>

        </section>

        <section>
            <h3>Toasts</h3>
        </section>

        <section>
            <h3>Messages</h3>

            <div class="codePreview">
                
                <div class="g-message"><div class="g-message__content">This is a message</div></div>
                <div class="g-message g-message--default"><div class="message__content">This is a message</div></div>
                <div class="g-message g-message--primary"><div class="message__content">This is a message</div></div>
                <div class="g-message g-message--secondary"><div class="message__content">This is a message</div></div>
                <div class="g-message g-message--success"><div class="message__content"><i class="uil uil-check"></i> This is a message</div></div>
                <div class="g-message g-message--warning"><div class="message__content">This is a message</div></div>
                <div class="g-message g-message--error"><div class="message__content">This is a message</div></div>
        </div>

        <div class="codePreview">
                <div class="g-message g-text-center">
                    <div class="g-message__icon">🤯</div>
                    <div class="g-message__title">Nothing here</div>
                    <div class="g-message__content">You didn't add anything yet.</div>
                    <div class="g-message__action"><button class="g-button g-button--primary">Add something</button></div>
                </div>

        </div>
        <div class="codePreview">

                <div class="g-message g-text-center">
                    <div class="g-message__icon"><i class="uil uil-battery-empty g-color--error"></i></div>
                    <div class="g-message__title">Almost empty!</div>
                    <div class="g-message__content">You better start charging!</div>
                </div>
        </div>

        </section>

        <section>
            <h3>Tables</h3>
            
            <div class="codePreview">
            <?php include("templates/components/tables/table.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/tables/table-striped.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/tables/table-columns.php");?>
            </div>
        </section>

        <section>
            <h3>Modal</h3>

            <!--<div class="codePreview">
                <?php include("templates/components/modals/modal.php");?>
            </div>-->

            <div class="codePreview">
                <!--

                <div class="g-modal">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">
                            <div class="g-display-flex g-space-between g-align-items-center">
                                <div class="g-modal__title">Confirm this action</div>
                                <div class="g-button g-button--icon-only"><i class="uil uil-multiply"></i></div>
                            </div>
                        </div>
                        <div class="g-modal__content">
                            <p class="g-text-center">Are you sure you want to delete this item?</p>
                        </div>
                        <div class="g-modal__footer">
                            <button class="g-button g-button--error g-w-100">Yes, delete!</button>
                        </div>
                    </div>
                </div>

                <div class="g-modal g-modal--pane">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">Header</div>
                        <div class="g-modal__content">qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/></div>
                        <div class="g-modal__footer">Footer</div>
                    </div>
                </div>-->

                <!--<div class="g-modal g-modal--fullscreen">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">Header</div>
                        <div class="g-modal__content">qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/></div>
                        <div class="g-modal__footer">Footer</div>
                    </div>
                </div>-->
            </div>
        </section>

        <section>
            <h3>Tabs</h3>
            <div class="codePreview">
<nav class="g-tabs">
    <ul>
        <li class="g-tabs__item g-tabs__item--active">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs">
    <ul>
        <a href="#" class="g-tabs__item g-tabs__item--active">Tabname</a>
        <a href="#" class="g-tabs__item">Tabname</a>
        <a href="#" class="g-tabs__item">Tabname</a>
        <a href="#" class="g-tabs__item">Tabname</a>
        <a href="#" class="g-tabs__item">Tabname</a>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs g-tabs--end">
    <ul>
        <li class="g-tabs__item g-color--error"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item g-tabs__item--active"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs g-tabs--center">
    <ul>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs">
    <ul>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>

        <li class="g-tabs__item"><button class="g-button g-button--primary g-button--small">Button</button></li>
    </ul>
</nav>
            </div>
        </section>

        <section>
            <h2>Helpers</h2>
            <div class="codePreview">
<p class="g-color--primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--error">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--success">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--warning">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--default">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<i class="g-color--success uil uil-check-circle"></i>
<i class="g-color--warning uil uil-exclamation-triangle"></i>
<i class="g-color--error uil uil-exclamation-circle"></i>
            </div>
        </section>

        <h2>Adjust theming</h2>
        <pre>
            &lt;style>
                :root {
                    --color-primary: purple;
                }
            &lt;/style>
        </pre>

            </main>

    </div>

        <script>
            var codePreviews = document.querySelectorAll(".codePreview");
            codePreviews.forEach(element => {
                const result = element.innerHTML.split(/\r?\n/);
                var html = "";
                result.forEach(line => {
                    html+=line.replaceAll("<","&lt")+"\n";
                })
                element.innerHTML += "<details><summary>Show code</summary><pre class='lolight'><code>"+html.trim()+"</code></pre></details>"
            })
        </script>

        <style>
            body {
                padding: 0 40px 0 280px;
            }

            .container {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
                display: flex;
            }

            .container aside {
                width: 240px;
                padding: 2rem;
                position: fixed;
                left: 0;
                top: 0;
                height: 100%;
                border-right: 1px solid #DDD;
            }

            .container aside ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            details {
                margin-top: 2rem;
            }

            .codePreview {
                border: 1px solid #eee;
                padding: 2rem;
                margin-bottom: 2rem;
                border-radius: 4px;
            }
            pre {
                background-color: #130c38;
                font-family: 'Courier New', Courier, monospace;
                font-size: 14px;
                line-height: 22px;
                padding: 1rem;
                border-radius: 8px;
                margin-top: 2rem;
            }

            .ll-nam {
                color: #858991;
            }
            .ll-key {
                color: orange;
                font-weight: normal;
            }
            .ll-pct {
                color: #CCC;
            }
            .ll-str {
                font-weight: 600;
            }
        </style>

        <script src="/docs/lolight-1.4.0.min.js"></script>
    </body>
</html>