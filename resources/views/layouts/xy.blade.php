<div class="form-row mt-4">
                                            <div class="col">
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">1. Format latitude longitude DD Degré décimal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" >
                                                    <label class="form-check-label" for="inlineRadio2">2. Format DMS degrés minutes secondes</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row mt-3 mb-5" id="DMS" style="display : none">
                                            <div class="col-1">
                                                <label>D°</label>
                                                <input type="number" step="0.01"  id="DX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>M'</label>
                                                <input type="number" step="0.01"  id="MX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>S"</label>
                                                <input type="number" step="0.01" id="SX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>Direction</label>
                                                <select  class="form-control" name="direction" id="directionX">
                                                    <option value="E">E</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label>Longitude x :</label>
                                                <input type="number" step="0.01" disabled class="form-control" id="rex">
                                            </div>
                                            <div class="col-1">
                                                <label>D°</label>
                                                <input type="number" step="0.01" id="DY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>M'</label>
                                                <input type="number" step="0.01" id="MY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>S"</label>
                                                <input type="number" step="0.01" id="SY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>Direction</label>
                                                <select  class="form-control" name="directionY" id="directionY">
                                                    <option value="N">N</option>
                                                    <option value="S">S</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label>Latitude y :</label>
                                                <input type="number" step="0.01" disabled class="form-control" id="rey">
                                            </div>       
                                        </div>

                                        <div class="form-row mt-3 mb-5" id="DD">
                                            <div class="col-2">
                                                <label>Longitude x :</label>
                                                <input type="number" step="0.01"  class="form-control" id="rex">
                                            </div>
                                            <div class="col-1">
                                                <label>D°</label>
                                                <input type="number" step="0.01" disabled  id="DX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>M'</label>
                                                <input type="number" step="0.01" disabled  id="MX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>S"</label>
                                                <input type="number" step="0.01" disabled id="SX" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>Direction</label>
                                                <select  class="form-control" disabled name="direction" id="directionX">
                                                    <option value="E">E</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label>Latitude y :</label>
                                                <input type="number" step="0.01"  class="form-control" id="rey">
                                            </div>
                                            
                                            <div class="col-1">
                                                <label>D°</label>
                                                <input type="number" disabled step="0.01" id="DY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>M'</label>
                                                <input type="number" disabled step="0.01" id="MY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>S"</label>
                                                <input type="number" disabled step="0.01" id="SY" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>Direction</label>
                                                <select  class="form-control" disabled name="directionY" id="directionY">
                                                    <option value="N">N</option>
                                                    <option value="S">S</option>
                                                </select>
                                            </div>
                                                   
                                        </div>