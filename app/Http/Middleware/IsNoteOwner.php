<?php

namespace App\Http\Middleware;

use Closure;
use App\Note;
use Auth;

class IsNoteOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $parameters = $request->route()->parameters();
        if(!empty($parameters)) {
            $id = !empty($parameters['id']) ? $parameters['id'] :$parameters['note'];
            $note = Note::find($id);
            if (!is_null($note) && ($note->user_id == Auth::id())) {
                return $next($request);
            } else {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
