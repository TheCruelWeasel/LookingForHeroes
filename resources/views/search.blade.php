@extends('welcome')
@section('title')
	Search
@stop
@section('search')
  <div class="search-wrap">
		<form>
	    <div class="parameters-wrap">
					<div class="game-parameters">
							<h3>search parameters</h3>
							<div class="form-group">
								<label for="team-name">Search by name / id</label>
								<input type="text" placeholder="Team name or id" name="team-name" id="team-name" />
							</div>

							<div class="form-group">
								<label for="team-gameplay-type">Type of gameplay</label>
								<div class="form-elem-spec small-select team-gameplay-type" id="team-gameplay-type">
										<ul>
											<li class="elem first-elem">casual</li><li class="elem middle-elem">standard</li><li class="elem last-elem">hardcore</li>
										</ul>
								</div>
							</div>

							<div class="separator"></div>

							<div class="form-group">
								<label for="game-region">Game region</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="form-elem-spec small-select game-region" id="game-region">
										<ul>
											<li class="elem first-elem">Europe</li><li class="elem last-elem">North-America</li>
										</ul>
								</div>
							</div>

							<div class="separator"></div>

							<div class="form-group">
								<label for="vocal">Vocal software</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="form-elem-spec small-select vocal" id="vocal">
										<ul>
											<li class="elem first-elem">Discord</li><li class="elem middle-elem middle-first">BattleNet</li><li class="elem middle-elem middle-last">TeamSpeak</li><li class="elem last-elem">Mumble</li>
										</ul>
										<ul>
											<li class="elem first-elem">Ventrilo</li><li class="elem middle-elem middle-first">Skype</li><li class="elem last-elem">Other :</li>
										</ul>
								</div>
							</div>
					</div>
					<div class="display-parameters">
							<h3>Your current parameters</h3>
					</div>
			</div>
		</form>
    <div class="results"></div>
  </div>
@stop
