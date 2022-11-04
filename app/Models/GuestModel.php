<?php 
namespace App\Models;
use CodeIgniter\Model;
class GuestModel extends Model
{
    protected $table = 'guest';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email', 'mobile_no', 'how_many_adults', 'how_many_children', 'in', 'out', 'room_category'];
}