<ul id="add-tag-list" style="display:none;">
    <div id="user-contributions">
        <div class="add-tag ">
            <ul id="add-tag-list">
                <li>
                    <p>Enter the tag you would like to associate with this record and click 'Add tag'. Please ensure the tag is appropriate for the record.<br><a href="/tags/index/howtotag">Read tagging guidelines</a></p>
                    <div class="tagForm">
                        <form action="/Details/AddTag?iaid=C7351413" method="post"><label for="tagEntryText" class="entryLabel">Enter tag:</label>
                            <span class="textBoxSpan"><input id="tagEntryText" name="tagEntryText" type="text" value=""></span>
                            <input type="submit" value="Add tag" class="discoverySecondaryCallToActionLink" onclick="dcsMultiTrack('DCS.dcsuri','/AssetDetails/AddaTag','WT.ti','Add a Tag','WT.cg_n','Add a Tag','WT.dl','0','DCSext.prodpgtype','','DCSext.prodpgaction','');" id="tag-submit" disabled="disabled">
                            <span><a href="/tags/index">Show all tags</a> | <a href="/account/tags">Your tags</a></span>
                        </form>
                    </div>
                </li>
            </ul>
            <div id="sign-in-or-register">
                <p>Help us improve catalogue descriptions by <a href="/tags/index/howtotag">adding tags</a>.</p>
                <p>You need to <a href="/sign-in">sign in</a> to tag. If you don't have an account please <a href="/register?returnUrl=%2Fdetails%2Fr%2FC7351413">register</a>.</p>
            </div>
        </div>


        <form action="/Details/TagRemovalRequest" id="tag-removal-request-form" method="post" novalidate="novalidate">
            <div id="report-tag" class="report-tag not-available" aria-expanded="false">
                <fieldset>
                    <legend id="tagNameLabel">Request removal of tag '<span class="tagToBeRemoved"></span>'</legend>
                    <input data-val="true" data-val-required="This field is required" id="tagId" name="tagId" type="hidden" value="">
                    <input data-val="true" data-val-required="This field is required" id="tagValue" name="tagValue" type="hidden" value="">
                    <input data-val="true" data-val-required="This field is required" id="sourceIaid" name="sourceIaid" type="hidden" value="C7351413">
                    <input id="reference" name="reference" type="hidden" value="WO 95/1105/1">
                    <p id="flaggingTab_label">I think the tag '<span class="tagToBeRemoved"></span>' should be removed from:</p>
                    <div class="form-field-group" role="radiogroup" aria-labelledby="flaggingTab_label">
                        <input checked="checked" data-val="true" data-val-required="The RemoveAll field is required." id="thisRecord" name="RemoveAll" type="radio" value="False">
                        <label for="thisRecord">Just this record</label>
                        <input id="allRecords" name="RemoveAll" type="radio" value="True">
                        <label for="allRecords">All records where it currently appears</label>
                    </div>
                    <div class="form-field-group">
                        <label for="Reason">Please explain why you think this tag is inappropriate:</label>
                        <span class="field-validation-valid" data-valmsg-for="Reason" data-valmsg-replace="true"></span>
                        <textarea aria-required="true" cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters" data-val-length-max="1000" data-val-required="This field is required" id="Reason" name="Reason" rows="2"></textarea>
                    </div>
                    <br>
                    <h3 class="inline">Your details</h3>
                    <div class="form-field-group">
                        <p>If you provide contact details, we will be in touch about your request within 10 working days.</p>
                        <div class="form-field-group">
                            <label for="userName" id="username-label">
                                Name
                            </label><br>
                            <input id="userName" name="UserName" type="text" value="">
                        </div>
                        <div class="form-field-group">
                            <label for="userEmail" id="email-address-label">
                                Email address
                            </label><br>
                            <span class="field-validation-valid" data-valmsg-for="UserEmail" data-valmsg-replace="true"></span>
                            <input data-val="true" data-val-email="Email not valid" id="userEmail" name="UserEmail" type="text" value=""></div>
                    </div>
                    <div class="form-field-group small-spacer-above">
                        <input name="hash" value="tag-removal-request-form" hidden="">
                        <input id="submitTagRemovalRequest" type="submit" value="Submit">
                        <input type="reset" value="Cancel">
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
</ul>

