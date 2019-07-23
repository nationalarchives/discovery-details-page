<!-- TAG REMOVAL FORM  -->
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
            </div><!-- end form-field-group -->

            <div class="form-field-group">
                <label for="Reason">Please explain why you think this tag is inappropriate:</label>
                <span class="field-validation-valid" data-valmsg-for="Reason" data-valmsg-replace="true"></span>
                <textarea aria-required="true" cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters" data-val-length-max="1000" data-val-required="This field is required" id="Reason" name="Reason" rows="2"></textarea>
            </div><!-- end form-field-group -->

            <br>
            <h3 class="inline">Your details</h3>
            <div class="form-field-group">
                <p>If you provide contact details, we will be in touch about your request within 10 working days.</p>
                <div class="form-field-group">
                    <label for="userName" id="username-label">
                        Name
                    </label><br>
                    <input id="userName" name="UserName" type="text" value="">
                </div><!-- end form-field-group -->

                <div class="form-field-group">
                    <label for="userEmail" id="email-address-label">
                        Email address
                    </label><br>
                    <span class="field-validation-valid" data-valmsg-for="UserEmail" data-valmsg-replace="true"></span>
                    <input data-val="true" data-val-email="Email not valid" id="userEmail" name="UserEmail" type="text" value=""></div>
            </div><!-- end form-field-group -->

            <div class="form-field-group small-spacer-above">
                <input name="hash" value="tag-removal-request-form" hidden="">
                <input id="submitTagRemovalRequest" type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </div><!-- end form-field-group -->
        </fieldset>
    </div><!-- end report-tag -->
</form><!-- end tag-removal-request-form -->
