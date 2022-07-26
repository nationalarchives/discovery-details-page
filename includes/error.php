<form action="https://discovery.nationalarchives.gov.uk/details/r/154c9e92053e46eaa8cf3096b40c8d8e/submitcorrection" aria-expanded="false" id="suggest-a-correction-form" method="post" novalidate="novalidate">
    <fieldset>

        <!-- ERROR DETAILS -->
        <div class="breather suggestion-form-wrapper">

            <div class="first-form-field-group">
                <label for="fieldContainingError">Which field contains the error?</label>
                <span class="field-validation-valid" data-valmsg-for="Field" data-valmsg-replace="true"></span>
                <select data-val="true" data-val-required="This field is required" id="fieldContainingError" name="Field">
                    <option value="">Select from list</option>
                    <option>Access conditions</option>
                    <option>Arrangement</option>
                    <option>Creator</option>
                    <option>Date</option>
                    <option>Description</option>
                    <option>Former references</option>
                    <option>Held by</option>
                    <option>Language</option>
                    <option>Legal status</option>
                    <option>Note</option>
                    <option>Other</option>
                    <option>Physical description</option>
                    <option>Reference</option>
                    <option>Related Material</option>
                    <option>Separated Material</option>
                    <option>Title</option>
                </select>
            </div><!-- end first-form-field-group -->

            <div class="form-field-group">
                <label for="whatIsTheError">What is the error?</label>
                <span class="field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
                <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters" data-val-length-max="1000" data-val-required="This field is required" id="whatIsTheError" name="Description" rows="2"></textarea>
            </div><!-- end form-field-group -->

            <div class="form-field-group">
                <label for="whatIsTheRecommendation">What is the correct information?</label>
                <span class="field-validation-valid" data-valmsg-for="Recommendation" data-valmsg-replace="true"></span>
                <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters" data-val-length-max="1000" data-val-required="This field is required" id="whatIsTheRecommendation" name="Recommendation" rows="2"></textarea>
            </div><!-- end form-field-group -->

            <div class="form-field-group">
                <label for="referenceDetails" id="reference-details-label"> Have you seen this error elsewhere? Please provide reference details <span class="indicate-mandatory-form-element optional">(optional)</span></label>
                <textarea cols="20" id="referenceDetails" name="ReferenceDetails" rows="2"></textarea>
            </div><!-- end form-field-group -->

        </div><!-- end breather -->

        <!-- CUSTOMER DETAILS -->
        <div class="breather suggestion-form-wrapper">
            <h3 class="inline">Your details</h3>

            <div class="form-field-group">
                <p>If you provide contact details, we will be in touch about your request within 10 working days.</p>
                <div class="small-spacer-below">
                    <label for="userName" id="username-label">Name</label>
                    <input id="userName" name="UserName" type="text" value="">
                </div><!-- end small-spacer-below -->

                <div class="small-spacer-below">
                    <label for="userEmail" id="email-address-label">Email address</label>
                    <span class="field-validation-valid" data-valmsg-for="UserEmail" data-valmsg-replace="true"></span>
                    <input data-val="true" data-val-email="Email not valid" id="userEmail" name="UserEmail" type="email" value="">
                </div><!-- end small-spacer-below -->
            </div><!-- end form-field-group -->

            <div class="form-field-group hidden">
                <label for="comments_box">Place comments here</label>
                <input autocomplete="off" name="comments_box" id="comments_box">
            </div><!-- end form-field-group -->
            <div class="last-form-field-group">
                <input class="discoverySecondaryCallToActionLink" type="submit" value="Submit">
            </div><!-- end last-form-field-group -->

        </div><!-- end breather -->

    </fieldset>
    <input id="Hash" name="Hash" type="hidden" value="">
    <input id="DocReference" name="DocReference" type="hidden" value="WO 95/95/3">
    <input id="ID" name="ID" type="hidden" value="154c9e92053e46eaa8cf3096b40c8d8e">
</form><!-- end suggest-a-correction-form -->
