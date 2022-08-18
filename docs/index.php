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
                --grid-gap: 1rem;
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

                <!-- Buttons -->
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

                <!-- Links -->
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

                <!-- Forms -->
                <section>

                    <h3>Forms</h3>

                    <h4 id="forms">Inputs</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-input.php");?>
                    </div>

                    <h4 id="forms-textarea">Textarea</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-textarea.php");?>
                    </div>

                    <h4 id="forms-upload">Upload</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-upload.php");?>
                    </div>

                    <h4 id="forms-datetime">Date & time</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-date-time.php");?>
                    </div>

                    <h4 id="forms-colorpicker">Colorpicker</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-colorpicker.php");?>
                    </div>

                    <h4 id="forms-label">Labels</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-label.php");?>
                    </div>

                    <h4 id="forms-colors">Input colors</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-color.php");?>
                    </div>

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
                    
                    <h4 id="forms-switch-label">Switch with label</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-switch-label.php");?>
                    </div>

                    <h4 id="forms-switch-content">Switch with content</h4>
                    <div class="codePreview">
                    <?php include("templates/components/forms/forms-switch-content.php");?>
                    </div>

                </section>

                <!-- Tables -->
                <section>
                    <h3>Tables</h3>

                    <h4 id="tables">Default</h4>
                    <div class="codePreview">
                    <?php include("templates/components/tables/table.php");?>
                    </div>

                    <h4 id="tables-striped">Striped table</h4>
                    <div class="codePreview">
                    <?php include("templates/components/tables/table-striped.php");?>
                    </div>

                    <h4 id="tables-column">Column table</h4>
                    <div class="codePreview">
                    <?php include("templates/components/tables/table-columns.php");?>
                    </div>
                </section>

                <!-- Helpers -->
                <section>
                    <h3>Helpers</h3>

                    <h4 id="text-color">Text color</h4>
                    <div class="codePreview">
                    <?php include("templates/helpers/text-color.php");?>
                    </div>

                    <h4 id="background-color">Background color</h4>
                    <div class="codePreview">
                    <?php include("templates/helpers/background-color.php");?>
                    </div>
                </section>

        <details class="g-collapse">
            <summary class="g-collapse__title">You can find this information here</summary>
            <div class="g-collapse__content">Long information about the detail.</div>
        </details>

        <details class="g-collapse">
            <summary class="g-collapse__title">You can find this information here</summary>
            <div class="g-collapse__content">
                
                <details class="g-collapse">
                    <summary class="g-collapse__title">You can find this information here</summary>
                    <div class="g-collapse__content">Long information about the detail.</div>
                </details>

                <details class="g-collapse">
                    <summary class="g-collapse__title">You can find this information here</summary>
                    <div class="g-collapse__content">Long information about the detail.</div>
                </details>

            </div>
        </details>

        <details class="g-collapse">
            <summary class="g-collapse__title">You can find this information here</summary>
            <div class="g-collapse__content">Long information about the detail.</div>
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

        <div class="g-border g-border--dashed g-border--error">
            Error border
        </div>

        </section>

        <h4>Grid</h4>
        <div class="codePreview">
        <div class="g-grid">
<?php for($i=1; $i<=12; $i++):?>
    <div class="g-row">
        <div class="g-col-<?php echo $i;?>">.g-col-<?php echo $i;?></div>
    </div>
<?php endfor;?>
</div></div>

<h4>Grid push</h4>
<div class="codePreview">
        <div class="g-grid">
<?php for($i=1; $i<=12; $i++):?>
    <div class="g-row">
        <div class="g-col-<?php echo $i;?> g-col-push-<?php echo 12-$i;?>">.g-col-push-<?php echo $i;?></div>
    </div>
<?php endfor;?>
</div></div>

<h4>Grid rows</h4>
<div class="codePreview">
    <div class="g-grid">
        <?php for($r=1; $r<=6; $r++):?>
            <div class="g-row">
                <?php for($i=1; $i<=(12/$r); $i++):?>
                    <div class="g-col-<?php echo $r;?>">Col <?php echo $r;?></div>
                <?php endfor;?>
            </div>
            <?php if($r%3!=0) $r++;?>
        <?php endfor;?>
    </div>
</div>

<h4>Grid gap</h4>
<div class="codePreview">
    <div class="g-grid g-grid--gap">
        <?php for($r=1; $r<=6; $r++):?>
            <div class="g-row">
                <?php for($i=1; $i<=(12/$r); $i++):?>
                    <div class="g-col-<?php echo $r;?>">Col <?php echo $r;?></div>
                <?php endfor;?>
            </div>
            <?php if($r%3!=0) $r++;?>
        <?php endfor;?>
    </div>
</div>

<h4>Grid nesting</h4>
<div class="codePreview">
    <div class="g-grid g-grid--gap">
        <?php for($r=4; $r<=6; $r++):?>
            <div class="g-row">
                <?php for($i=1; $i<=(12/$r); $i++):?>
                    <div class="g-col-<?php echo $r;?>">

                        <div class="g-row">
                            <div class="g-col-3">Nesting</div>
                            <div class="g-col-3">Nesting</div>
                            <div class="g-col-3">Nesting</div>
                            <div class="g-col-3">Nesting</div>
                        </div>

                    </div>
                <?php endfor;?>
            </div>
            <?php if($r%3!=0) $r++;?>
        <?php endfor;?>
    </div>
</div>
    

        <style>
            [class^="g-col-"] {
                margin-bottom: 1rem;
                border-radius: 4px;
                border: 1px solid #DDD;
                padding: .5rem;
            }
        </style>

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
                //element.innerHTML += "<details><summary>Show code</summary><pre class='lolight'><code>"+html.trim()+"</code></pre></details>"
                element.innerHTML += "<details><summary>Show code</summary><pre><code class='language-html'>"+html.trim()+"</code></pre></details>"
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

            details:not(.g-collapse) {
                margin-top: 2rem;
            }

            .codePreview {
                /*border: 1px solid #eee;
                padding: 2rem;*/
                margin-bottom: 4rem;
                border-radius: 4px;
                border-bottom: 1px solid #EEE;
                padding-bottom: 4rem;
            }

            h2 {
                font-size: 2rem;
            }
            h3 {
                font-size: 1.75rem;
            }
            H4 {
                font-size: 1.25rem;
            }

            h4 {
                margin-top: 4rem;
                display: block;
            }

            /*pre {
                background-color: #130c38;
                font-family: 'Courier New', Courier, monospace;
                font-size: 14px;
                line-height: 22px;
                padding: 1rem;
                border-radius: 8px;
                margin-top: 2rem;
            }*/

            code {
                border-radius: 8px;
                padding: 1.5rem 2rem !important;
                line-height: 1.75rem;
                font-size: .825rem;
            }
        </style>

        <!--<script src="/docs/lolight-1.4.0.min.js"></script>

        <pre><code class="language-html">...</code></pre>-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js" integrity="sha512-gU7kztaQEl7SHJyraPfZLQCNnrKdaQi5ndOyt4L4UPL/FHDd/uB9Je6KDARIqwnNNE27hnqoWLBq+Kpe4iHfeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/base16/atlas.min.css" integrity="sha512-zAifE3claO+/HW1U03Rhi/F74xMzp+X+5HpN55SJY2dBMvBg3FKO12adWRpWSwaT4FAtjsWOJkyW4zfGLY9uzA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>hljs.highlightAll();</script>
    </body>
</html>